<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\NewsArticle;
use App\Models\PortfolioProject;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    /**
     * Curated platform solutions, proprietary products, and specialized services
     */
    protected array $platformCatalog = [
        [
            'title' => 'VERIFIED!',
            'type' => 'Platform Product',
            'category' => 'Identity & KYC',
            'description' => 'Sovereign Identity Provider & Verification API with 3D Liveness, Government ID, FaceID, and biometric checks.',
            'url' => '/#products-section',
            'keywords' => ['verified', 'kyc', 'identity', 'biometrics', 'liveness', 'faceid', 'fingerprint', 'compliance', 'bank of ghana'],
            'badge' => 'Flagship Product',
        ],
        [
            'title' => 'ticketMan',
            'type' => 'Platform Product',
            'category' => 'Ticketing & Hardware Gate',
            'description' => 'Event ticketing and biometric access management with QR/barcode scan, gate biometrics, and zero wristbands.',
            'url' => '/#products-section',
            'keywords' => ['ticketman', 'ticketing', 'tickets', 'events', 'biometric gate', 'fingerprint gate', 'qr code', 'barcode', 'access control'],
            'badge' => 'Flagship Product',
        ],
        [
            'title' => 'roofMe',
            'type' => 'Platform Product',
            'category' => 'PropTech & Hospitality',
            'description' => 'Property and hospitality management system with integrated rent collection for guest houses, apartments, and hotels.',
            'url' => '/#products-section',
            'keywords' => ['roofme', 'real estate', 'property', 'apartments', 'hotels', 'motels', 'guest house', 'rent', 'tenants', 'landlord'],
            'badge' => 'Flagship Product',
        ],
        [
            'title' => 'SaaS Platforms',
            'type' => 'Specialized Service',
            'category' => 'Cloud Solutions',
            'description' => 'Enterprise-grade multi-tenant software platforms architected for high scale and uptime.',
            'url' => '/services',
            'keywords' => ['saas', 'cloud', 'multi-tenant', 'platforms', 'enterprise software'],
            'badge' => 'Service',
        ],
        [
            'title' => 'Workflow Automation',
            'type' => 'Specialized Service',
            'category' => 'AI Automation',
            'description' => 'Intelligent AI workflows and process automations connected directly to your existing data pipelines.',
            'url' => '/services',
            'keywords' => ['workflow automation', 'automation', 'pipeline', 'ai process', 'bot'],
            'badge' => 'Service',
        ],
        [
            'title' => 'Software Development',
            'type' => 'Specialized Service',
            'category' => 'Engineering',
            'description' => 'Mission-critical custom backends, APIs, and microservices engineered for scale.',
            'url' => '/services',
            'keywords' => ['software development', 'coding', 'backend', 'api', 'engineering', 'web services'],
            'badge' => 'Service',
        ],
        [
            'title' => 'Web Development',
            'type' => 'Specialized Service',
            'category' => 'Web Engineering',
            'description' => 'Reactive web applications, high-performance user interfaces, and brand conversions.',
            'url' => '/services',
            'keywords' => ['web development', 'frontend', 'website', 'reactive', 'tailwind', 'vue', 'react'],
            'badge' => 'Service',
        ],
        [
            'title' => 'Integrated Systems',
            'type' => 'Specialized Service',
            'category' => 'IoT & Hardware',
            'description' => 'Hardware telemetry, edge compute nodes, and connected industrial systems.',
            'url' => '/services',
            'keywords' => ['integrated systems', 'hardware', 'iot', 'telemetry', 'edge computing', 'sensors'],
            'badge' => 'Service',
        ],
        [
            'title' => 'Security Systems',
            'type' => 'Specialized Service',
            'category' => 'Cybersecurity & Defense',
            'description' => 'Access perimeter hardening, encryption protocols, and infrastructure cyber defense.',
            'url' => '/services',
            'keywords' => ['security systems', 'cybersecurity', 'security', 'defense', 'perimeter', 'encryption'],
            'badge' => 'Service',
        ],
        [
            'title' => 'MAI (Monarch AI)',
            'type' => 'Platform Product',
            'category' => 'Intelligence',
            'description' => 'Monarch Intelligence companion capable of understanding business queries and automating operations.',
            'url' => '/#mai',
            'keywords' => ['mai', 'monarch ai', 'ai', 'chatbot', 'assistant', 'machine learning', 'companion'],
            'badge' => 'AI Platform',
        ],
    ];

    /**
     * Handle search queries across Products, Articles, Services, Projects, and Careers
     */
    public function search(Request $request)
    {
        $query = trim($request->get('q', ''));
        $isAjax = $request->ajax() || $request->wantsJson() || $request->has('ajax');

        if (strlen($query) < 2) {
            if ($isAjax) {
                return response()->json([
                    'query' => $query,
                    'total' => 0,
                    'results' => [
                        'products' => [],
                        'platforms' => [],
                        'articles' => [],
                        'projects' => [],
                        'careers' => [],
                    ],
                ]);
            }

            return view('pages.search', [
                'query' => $query,
                'total' => 0,
                'products' => collect(),
                'platforms' => collect(),
                'articles' => collect(),
                'projects' => collect(),
                'careers' => collect(),
            ]);
        }

        $term = '%' . strtolower($query) . '%';
        $queryLower = strtolower($query);

        // 1. Search Store Products
        $products = Product::active()
            ->with('category')
            ->where(function ($q) use ($term) {
                $q->whereRaw('LOWER(name) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(description) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(short_description) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(badge_text) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(sku) LIKE ?', [$term]);
            })
            ->latest()
            ->take(6)
            ->get();

        // 2. Search Articles (News)
        $articles = NewsArticle::published()
            ->where(function ($q) use ($term) {
                $q->whereRaw('LOWER(title) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(excerpt) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(body) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(category) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(author_name) LIKE ?', [$term]);
            })
            ->latest('published_at')
            ->take(6)
            ->get();

        // 3. Search Platform Products & Services
        $matchedPlatforms = collect($this->platformCatalog)->filter(function ($item) use ($queryLower) {
            if (str_contains(strtolower($item['title']), $queryLower)) return true;
            if (str_contains(strtolower($item['description']), $queryLower)) return true;
            if (str_contains(strtolower($item['category']), $queryLower)) return true;
            foreach ($item['keywords'] as $kw) {
                if (str_contains($kw, $queryLower) || str_contains($queryLower, $kw)) return true;
            }
            return false;
        })->values();

        // 4. Search Portfolio Projects
        $projects = PortfolioProject::published()
            ->where(function ($q) use ($term) {
                $q->whereRaw('LOWER(title) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(description) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(domain) LIKE ?', [$term]);
            })
            ->take(4)
            ->get();

        // 5. Search Job Listings / Careers
        $careers = JobListing::active()
            ->where(function ($q) use ($term) {
                $q->whereRaw('LOWER(title) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(department) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(description) LIKE ?', [$term])
                  ->orWhereRaw('LOWER(skills_required) LIKE ?', [$term]);
            })
            ->take(4)
            ->get();

        $totalCount = $products->count() + $matchedPlatforms->count() + $articles->count() + $projects->count() + $careers->count();

        if ($isAjax) {
            return response()->json([
                'query' => $query,
                'total' => $totalCount,
                'results' => [
                    'products' => $products->map(function ($p) {
                        return [
                            'id' => $p->id,
                            'title' => $p->name,
                            'url' => route('store.show', $p->slug),
                            'price' => '$' . number_format($p->sale_price ?? $p->price, 2),
                            'original_price' => $p->sale_price ? '$' . number_format($p->price, 2) : null,
                            'image' => $p->image_path ? asset($p->image_path) : null,
                            'category' => $p->category?->name ?? 'Store Product',
                            'badge' => $p->badge_text,
                        ];
                    }),
                    'platforms' => $matchedPlatforms->map(function ($pl) {
                        return [
                            'title' => $pl['title'],
                            'url' => $pl['url'],
                            'type' => $pl['type'],
                            'category' => $pl['category'],
                            'description' => Str::limit($pl['description'], 110),
                            'badge' => $pl['badge'],
                        ];
                    }),
                    'articles' => $articles->map(function ($a) {
                        return [
                            'id' => $a->id,
                            'title' => $a->title,
                            'url' => $a->external_url ?: url('/blog#' . $a->slug),
                            'category' => NewsArticle::getCategoryLabel($a->category),
                            'excerpt' => Str::limit($a->excerpt ?: strip_tags($a->body), 100),
                            'author' => $a->author_name,
                            'read_time' => $a->read_time_minutes . ' min read',
                            'date' => $a->published_at?->format('M d, Y'),
                            'is_external' => !empty($a->external_url),
                        ];
                    }),
                    'projects' => $projects->map(function ($pr) {
                        return [
                            'id' => $pr->id,
                            'title' => $pr->title,
                            'url' => url('/projects#' . $pr->slug),
                            'domain' => $pr->domain,
                            'description' => Str::limit($pr->description, 90),
                        ];
                    }),
                    'careers' => $careers->map(function ($c) {
                        return [
                            'id' => $c->id,
                            'title' => $c->title,
                            'url' => url('/careers'),
                            'department' => $c->department,
                            'type' => $c->employmentTypeLabel(),
                            'location' => $c->location,
                        ];
                    }),
                ],
            ]);
        }

        return view('pages.search', [
            'query' => $query,
            'total' => $totalCount,
            'products' => $products,
            'platforms' => $matchedPlatforms,
            'articles' => $articles,
            'projects' => $projects,
            'careers' => $careers,
        ]);
    }
}
