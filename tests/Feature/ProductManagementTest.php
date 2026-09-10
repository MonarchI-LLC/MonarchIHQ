<?php

namespace Tests\Feature;

use App\Filament\Resources\CategoryResource\Pages\CreateCategory;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\UnableToRetrieveMetadata;
use Livewire\Livewire;
use Tests\TestCase;

class ProductManagementTest extends TestCase
{
    use RefreshDatabase;

    protected User $superAdmin;

    protected User $storeManager;

    protected Category $category;

    protected function setUp(): void
    {
        parent::setUp();

        $this->superAdmin = User::factory()->create([
            'role' => 'super_admin',
            'email' => 'admin@monarchi.com',
            'is_super_admin' => true,
        ]);

        $this->storeManager = User::factory()->create([
            'role' => 'store_manager',
            'email' => 'manager@monarchi.com',
        ]);

        $this->category = Category::create([
            'name' => 'SaaS & Enterprise Platforms',
            'slug' => 'saas-enterprise-platforms',
            'is_active' => true,
        ]);
    }

    public function test_super_admin_can_create_digital_product_in_filament_without_stock_quantity(): void
    {
        $this->actingAs($this->superAdmin);

        Livewire::test(CreateProduct::class)
            ->set('data.name', 'invenStore SME POS')
            ->set('data.slug', 'invenstore-sme-pos')
            ->set('data.sku', 'SAAS-IS10000')
            ->set('data.category_id', $this->category->id)
            ->set('data.price', 2999.00)
            ->set('data.is_digital', true)
            ->set('data.card_style', 'dark')
            ->call('create')
            ->assertHasNoFormErrors();

        $this->assertDatabaseHas('products', [
            'slug' => 'invenstore-sme-pos',
            'is_digital' => true,
            'stock_quantity' => null,
            'min_stock_threshold' => null,
        ]);

        $product = Product::where('slug', 'invenstore-sme-pos')->first();
        $this->assertEquals('in_stock', $product->stock_status);
        $this->assertNotEquals('Restock Soon', $product->badge['text'] ?? null);
    }

    public function test_store_manager_can_create_digital_product_without_stock(): void
    {
        $this->actingAs($this->storeManager);

        $response = $this->post(route('manager.store.products.store'), [
            'name' => 'Cloud Backup Solution',
            'slug' => 'cloud-backup-solution',
            'sku' => 'MHQ-BK001',
            'category_id' => $this->category->id,
            'is_digital' => 1,
            'price' => 450.00,
            'card_style' => 'light',
        ]);

        $response->assertRedirect(route('manager.store.products'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('products', [
            'slug' => 'cloud-backup-solution',
            'is_digital' => true,
            'stock_quantity' => null,
        ]);
    }

    public function test_store_manager_can_create_physical_product_with_stock_and_images(): void
    {
        Storage::fake('public');
        $this->actingAs($this->storeManager);

        $cover = UploadedFile::fake()->image('hardware.jpg', 600, 600);
        $gallery1 = UploadedFile::fake()->image('g1.jpg', 600, 600);
        $gallery2 = UploadedFile::fake()->image('g2.jpg', 600, 600);

        $response = $this->post(route('manager.store.products.store'), [
            'name' => 'Monarch Edge IoT Gateway',
            'slug' => 'monarch-edge-iot-gateway',
            'sku' => 'MHQ-IOT001',
            'category_id' => $this->category->id,
            'is_digital' => 0,
            'price' => 1250.00,
            'stock_quantity' => 25,
            'min_stock_threshold' => 5,
            'card_style' => 'dark',
            'image_path' => $cover,
            'gallery' => [$gallery1, $gallery2],
        ]);

        $response->assertRedirect(route('manager.store.products'));

        $product = Product::where('slug', 'monarch-edge-iot-gateway')->first();
        $this->assertNotNull($product);
        $this->assertFalse($product->is_digital);
        $this->assertEquals(25, $product->stock_quantity);
        $this->assertNotNull($product->image_path);
        $this->assertCount(2, $product->gallery);

        Storage::disk('public')->assertExists($product->image_path);
        foreach ($product->gallery as $path) {
            Storage::disk('public')->assertExists($path);
        }
    }

    public function test_digital_products_display_digital_delivery_on_storefront(): void
    {
        $digital = Product::create([
            'category_id' => $this->category->id,
            'name' => 'Monarch AI Dev SDK',
            'slug' => 'monarch-ai-dev-sdk',
            'price' => 199.00,
            'is_digital' => true,
            'stock_quantity' => null,
            'is_active' => true,
        ]);

        // Store index view
        $response = $this->get(route('store.index'));
        $response->assertStatus(200);
        $response->assertSee('Monarch AI Dev SDK');
        $response->assertSee('Instant Digital Delivery');

        // Product show view
        $showResponse = $this->get(route('store.show', $digital->slug));
        $showResponse->assertStatus(200);
        $showResponse->assertSee('Instant Digital Download');
        $showResponse->assertSee('Add to Bag (Instant Access)');
    }

    public function test_product_model_defaults_badge_color_and_card_style_when_null(): void
    {
        $product = Product::create([
            'category_id' => $this->category->id,
            'name' => 'Auto Defaulted Product',
            'slug' => 'auto-defaulted-product',
            'price' => 99.00,
            'badge_color' => null,
            'card_style' => null,
        ]);

        $this->assertEquals('orange', $product->badge_color);
        $this->assertEquals('light', $product->card_style);
        $this->assertDatabaseHas('products', [
            'slug' => 'auto-defaulted-product',
            'badge_color' => 'orange',
            'card_style' => 'light',
        ]);
    }

    public function test_super_admin_can_create_product_with_images_in_filament(): void
    {
        Storage::fake('public');
        $this->actingAs($this->superAdmin);

        $image = UploadedFile::fake()->image('product-main.png', 400, 400);

        Livewire::test(CreateProduct::class)
            ->set('data.name', 'POS Hardware Terminal')
            ->set('data.slug', 'pos-hardware-terminal')
            ->set('data.category_id', $this->category->id)
            ->set('data.price', 1899.00)
            ->set('data.stock_quantity', 15)
            ->set('data.card_style', 'dark')
            ->set('data.badge_color', 'orange')
            ->set('data.image_path', $image)
            ->call('create')
            ->assertHasNoFormErrors();

        $this->assertDatabaseHas('products', [
            'slug' => 'pos-hardware-terminal',
            'badge_color' => 'orange',
            'card_style' => 'dark',
        ]);

        $product = Product::where('slug', 'pos-hardware-terminal')->first();
        $this->assertNotNull($product->image_path);
        Storage::disk('public')->assertExists($product->image_path);
    }

    public function test_super_admin_can_create_category_with_image_in_filament(): void
    {
        Storage::fake('public');
        $this->actingAs($this->superAdmin);

        $image = UploadedFile::fake()->image('category-icon.png', 300, 300);

        Livewire::test(CreateCategory::class)
            ->set('data.name', 'Edge IoT Solutions')
            ->set('data.slug', 'edge-iot-solutions')
            ->set('data.sort_order', 5)
            ->set('data.is_active', true)
            ->set('data.image_path', $image)
            ->call('create')
            ->assertHasNoFormErrors();

        $this->assertDatabaseHas('categories', [
            'slug' => 'edge-iot-solutions',
            'name' => 'Edge IoT Solutions',
        ]);

        $category = Category::where('slug', 'edge-iot-solutions')->first();
        $this->assertNotNull($category->image_path);
        Storage::disk('public')->assertExists($category->image_path);
    }

    public function test_missing_temporary_file_throws_validation_exception_instead_of_500(): void
    {
        Route::get('/test-temporary-upload-exception', function () {
            throw UnableToRetrieveMetadata::create('livewire-tmp/missing-file.png', 'file_size');
        });

        $response = $this->getJson('/test-temporary-upload-exception');
        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['data.image_path']);
    }

    public function test_product_all_images_accessor_returns_main_and_gallery_images(): void
    {
        $product = Product::create([
            'category_id' => $this->category->id,
            'name' => 'Monarchi Cloud AI',
            'slug' => 'monarchi-cloud-ai',
            'sku' => 'MCAI-001',
            'price' => 250.00,
            'is_digital' => true,
            'image_path' => 'products/main-image.png',
            'gallery' => ['products/gallery/slide-1.png', 'products/gallery/slide-2.png'],
        ]);

        $allImages = $product->all_images;
        $this->assertCount(3, $allImages);
        $this->assertStringContainsString('products/main-image.png', $allImages[0]);
        $this->assertStringContainsString('products/gallery/slide-1.png', $allImages[1]);
        $this->assertStringContainsString('products/gallery/slide-2.png', $allImages[2]);
    }

    public function test_product_page_renders_slideshow_with_gallery_images(): void
    {
        $product = Product::create([
            'category_id' => $this->category->id,
            'name' => 'Dual Screen POS',
            'slug' => 'dual-screen-pos',
            'sku' => 'DSPOS-001',
            'price' => 1200.00,
            'stock_quantity' => 10,
            'is_digital' => false,
            'image_path' => 'products/pos-main.png',
            'gallery' => ['products/gallery/pos-side.png', 'products/gallery/pos-back.png'],
            'is_active' => true,
        ]);

        $response = $this->get(route('store.show', $product->slug));
        $response->assertOk();
        $response->assertSee('pos-main.png');
        $response->assertSee('pos-side.png');
        $response->assertSee('pos-back.png');
        $response->assertSee('Previous image');
        $response->assertSee('Next image');
    }

    public function test_digital_product_can_have_download_link_and_clears_when_switched_to_physical(): void
    {
        $product = Product::create([
            'category_id' => $this->category->id,
            'name' => 'Enterprise License Key',
            'slug' => 'enterprise-license-key',
            'sku' => 'ELK-001',
            'price' => 500.00,
            'is_digital' => true,
            'download_link' => 'https://downloads.monarchihq.com/enterprise-v1.zip',
        ]);

        $this->assertEquals('https://downloads.monarchihq.com/enterprise-v1.zip', $product->fresh()->download_link);

        // If changed to physical, download_link is cleared
        $product->update([
            'is_digital' => false,
            'stock_quantity' => 20,
        ]);

        $this->assertNull($product->fresh()->download_link);
    }

    public function test_order_success_page_displays_download_link_only_when_order_is_paid(): void
    {
        $product = Product::create([
            'category_id' => $this->category->id,
            'name' => 'DevOps Automation Toolkit',
            'slug' => 'devops-automation-toolkit',
            'sku' => 'DAT-001',
            'price' => 150.00,
            'is_digital' => true,
            'download_link' => 'https://cloud.monarchihq.com/downloads/devops-toolkit.tar.gz',
        ]);

        $order = Order::create([
            'user_id' => $this->superAdmin->id,
            'status' => 'pending',
            'payment_status' => 'pending',
            'payment_method' => 'paystack',
            'currency' => 'GHS',
            'subtotal' => 150.00,
            'total' => 150.00,
            'customer_name' => 'Alice Doe',
            'customer_email' => 'alice@example.com',
            'customer_phone' => '0501234567',
            'shipping_address' => 'Accra, Ghana',
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 1,
            'unit_price' => 150.00,
            'subtotal' => 150.00,
        ]);

        // When pending: download link is locked
        $response = $this->actingAs($this->superAdmin)->get(route('bag.success', $order->id));
        $response->assertOk();
        $response->assertSee('Locked until payment');
        $response->assertDontSee('https://cloud.monarchihq.com/downloads/devops-toolkit.tar.gz');

        // When paid: download link is unlocked and visible
        $order->update(['payment_status' => 'paid']);
        $response = $this->actingAs($this->superAdmin)->get(route('bag.success', $order->id));
        $response->assertOk();
        $response->assertSee('https://cloud.monarchihq.com/downloads/devops-toolkit.tar.gz');
        $response->assertSee('Download / Access Product');
    }

    public function test_user_dashboard_displays_download_link_for_paid_digital_orders(): void
    {
        $product = Product::create([
            'category_id' => $this->category->id,
            'name' => 'Pro AI Model Weights',
            'slug' => 'pro-ai-model-weights',
            'sku' => 'PAIM-001',
            'price' => 300.00,
            'is_digital' => true,
            'download_link' => 'https://storage.monarchihq.com/models/weights.bin',
        ]);

        $order = Order::create([
            'user_id' => $this->superAdmin->id,
            'status' => 'processing',
            'payment_status' => 'paid',
            'payment_method' => 'paystack',
            'currency' => 'GHS',
            'total' => 300.00,
            'customer_name' => $this->superAdmin->name,
            'customer_email' => $this->superAdmin->email,
            'customer_phone' => '0501234567',
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 1,
            'unit_price' => 300.00,
            'subtotal' => 300.00,
        ]);

        $response = $this->actingAs($this->superAdmin)->get(route('dashboard'));
        $response->assertOk();
        $response->assertSee('https://storage.monarchihq.com/models/weights.bin');
        $response->assertSee('Download');
    }
}
