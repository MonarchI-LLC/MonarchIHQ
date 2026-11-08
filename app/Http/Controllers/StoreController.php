<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $categories = Cache::remember('store:categories', now()->addMinutes(30), function () {
            return Category::where('is_active', true)
                ->orderBy('sort_order')
                ->get();
        });

        $featuredProducts = Cache::remember('store:featured_products', now()->addMinutes(15), function () {
            return Product::featured()
                ->with('category')
                ->latest()
                ->take(6)
                ->get();
        });

        $searchQuery = trim($request->get('search', $request->get('q', '')));
        $categorySlug = $request->get('category');
        if ($categorySlug === 'all') {
            $categorySlug = null;
        }

        $type = $request->get('type', 'all'); // all, physical, digital
        $priceRange = $request->get('price_range', 'all'); // all, under_500, 500_2000, 2000_5000, 5000_above, custom
        $minPrice = $request->filled('min_price') ? (float)$request->get('min_price') : null;
        $maxPrice = $request->filled('max_price') ? (float)$request->get('max_price') : null;
        $stock = $request->get('stock', 'all'); // all, in_stock, sale, pre_order
        $sort = $request->get('sort', 'recommended'); // recommended, lowest_price, highest_price, popularity, latest

        $productsQuery = Product::active()->with('category');

        // 1. Keyword search (name, description, short_description, sku, badge_text)
        if ($searchQuery !== '') {
            $term = '%' . strtolower($searchQuery) . '%';
            $productsQuery->where(function ($q) use ($term) {
                $q->whereRaw('LOWER(name) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(description) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(short_description) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(badge_text) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(sku) LIKE ?', [$term]);
            });
        }

        // 2. Category filter
        if ($categorySlug) {
            $productsQuery->forCategory($categorySlug);
        }

        // 3. Product type filter (Physical hardware vs Digital licenses)
        if ($type === 'physical') {
            $productsQuery->where('is_digital', false);
        } elseif ($type === 'digital') {
            $productsQuery->where('is_digital', true);
        }

        // 4. Price range filter
        if ($priceRange === 'under_500') {
            $minPrice = 0;
            $maxPrice = 500;
        } elseif ($priceRange === '500_2000') {
            $minPrice = 500;
            $maxPrice = 2000;
        } elseif ($priceRange === '2000_5000') {
            $minPrice = 2000;
            $maxPrice = 5000;
        } elseif ($priceRange === '5000_above') {
            $minPrice = 5000;
            $maxPrice = null;
        }

        if ($minPrice !== null) {
            $productsQuery->whereRaw('COALESCE(sale_price, price) >= ?', [$minPrice]);
        }
        if ($maxPrice !== null) {
            $productsQuery->whereRaw('COALESCE(sale_price, price) <= ?', [$maxPrice]);
        }

        // 5. Stock / Availability filter
        if ($stock === 'in_stock') {
            $productsQuery->where(function ($q) {
                $q->where('is_digital', true)
                  ->orWhere('stock_quantity', '>', 0);
            });
        } elseif ($stock === 'sale') {
            $productsQuery->whereNotNull('sale_price')
                          ->whereColumn('sale_price', '<', 'price');
        } elseif ($stock === 'pre_order') {
            $productsQuery->whereRaw('LOWER(badge_text) LIKE ?', ['%pre%']);
        }

        // 6. Sorting
        switch ($sort) {
            case 'lowest_price':
                $productsQuery->orderByRaw('COALESCE(sale_price, price) ASC');
                break;
            case 'highest_price':
                $productsQuery->orderByRaw('COALESCE(sale_price, price) DESC');
                break;
            case 'popularity':
                $productsQuery->orderBy('popularity', 'desc')->orderBy('id', 'desc');
                break;
            case 'latest':
                $productsQuery->latest();
                break;
            case 'recommended':
            default:
                $productsQuery->orderBy('is_featured', 'desc')
                              ->orderBy('popularity', 'desc')
                              ->latest();
                break;
        }

        $products = $productsQuery->paginate(12)->withQueryString();

        $activeCategory = $categorySlug;
        $hasActiveFilters = !empty($searchQuery)
            || !empty($categorySlug)
            || ($type !== 'all')
            || ($priceRange !== 'all')
            || ($minPrice !== null && $minPrice > 0)
            || ($maxPrice !== null)
            || ($stock !== 'all')
            || ($sort !== 'recommended');

        return view('store.store', compact(
            'categories',
            'featuredProducts',
            'products',
            'activeCategory',
            'searchQuery',
            'type',
            'priceRange',
            'minPrice',
            'maxPrice',
            'stock',
            'sort',
            'hasActiveFilters'
        ));
    }

    public function show(string $slug)
    {
        $product = Product::active()
            ->with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        $related = Product::active()
            ->with('category')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('store.product', compact('product', 'related'));
    }
}
