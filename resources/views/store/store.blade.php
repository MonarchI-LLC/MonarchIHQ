<x-main-layout
    title="MonarchI Store — Enterprise Hardware, IoT & Digital Products"
    description="Explore and purchase official MonarchI hardware, smart devices, software licenses, and digital developer products."
    keywords="MonarchI Store, Buy Enterprise Hardware, IoT Devices, AI Hardware Africa, Tech Store Ghana, Developer Licenses">

{{-- ═══════════════════════════════════════════════════════════════════════════
     STORE PAGE — Bounded Sections with Drop Shadows & Optimized Card Sizes
═══════════════════════════════════════════════════════════════════════════ --}}
<div class="store-page-root relative pt-10 md:pt-11 pb-24 min-h-screen px-4 sm:px-6 lg:px-8 space-y-10 md:space-y-12 overflow-hidden" style="background: var(--bg-primary); color: var(--text-primary);">

    {{-- ── STYLES ───────────────────────────────────────────────────────────── --}}
    <style>
        .prod-scroll::-webkit-scrollbar { display: none; }
        .prod-scroll { -ms-overflow-style: none; scrollbar-width: none; }

        /* Section Boundary Box with Drop Shadows */
        .store-section-boundary {
            background: var(--card-bg-alt);
            border: 1px solid var(--border-color);
            border-radius: 2rem;
            box-shadow: 0 16px 45px rgba(0, 0, 0, 0.25);
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
        }
        html.light-theme .store-section-boundary {
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.05);
            border-color: rgba(0, 0, 0, 0.08);
        }

        /* Bento Product Card - Compact, Balanced Length */
        .store-bento-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            border-radius: 1.25rem;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
        }
        .store-bento-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 36px rgba(0,0,0,0.22);
            border-color: rgba(156, 5, 29, 0.4);
        }
        html.light-theme .store-bento-card {
            background: #ffffff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.04);
            border-color: rgba(0, 0, 0, 0.07);
        }
        html.light-theme .store-bento-card:hover {
            box-shadow: 0 12px 28px rgba(0,0,0,0.08);
            border-color: rgba(0, 113, 227, 0.35);
        }

        .store-bento-card.is-out-of-stock {
            opacity: 0.78;
        }

        /* Product image hover */
        .store-bento-card .bento-img {
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .store-bento-card:hover .bento-img {
            transform: scale(1.05);
        }

        /* Add-to-bag button animation */
        .atb-btn {
            transition: all 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .atb-btn:hover { transform: scale(1.02); }
        .atb-btn:active { transform: scale(0.97); }

        /* Featured card - Optimized Length to prevent title underlapping */
        .feat-card {
            border: 1px solid var(--border-color);
            box-shadow: 0 10px 28px rgba(0,0,0,0.18);
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
        }
        .feat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 42px rgba(0,0,0,0.28);
            border-color: rgba(156, 5, 29, 0.4);
        }
        .feat-card .feat-img {
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .feat-card:hover .feat-img { transform: scale(1.06); }

        /* Unified Badges */
        .badge-orange { background: #ff6a00; color: #ffffff; }
        .badge-red    { background: #e3000f; color: #ffffff; }
        .badge-green  { background: #00a651; color: #ffffff; }
        .badge-blue   { background: #0071e3; color: #ffffff; }
        .badge-gray   { background: #4b5563; color: #ffffff; }

        /* Stock Status Dots */
        .dot-in    { background: #00a651; }
        .dot-low   { background: #f59e0b; }
        .dot-out   { background: #e3000f; }

        /* Category pills */
        .cat-chip {
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            transition: all 0.25s ease;
        }
        .cat-chip:hover {
            transform: translateY(-2px);
            border-color: rgba(156, 5, 29, 0.5);
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        }
        .cat-chip.cat-active {
            border-color: #9c051d;
            box-shadow: 0 0 0 2px rgba(156, 5, 29, 0.3);
        }
        html.light-theme .cat-chip {
            background: #ffffff;
        }

        /* Action buttons */
        .store-action-btn {
            background: var(--card-bg-alt);
            border: 1px solid var(--border-color);
            color: var(--text-secondary);
            transition: all 0.2s ease;
        }
        .store-action-btn:hover {
            color: var(--text-primary);
            border-color: var(--text-muted);
            transform: scale(1.05);
        }

        /* Glassmorphic Search & Filter Section */
        .store-glass-search {
            background: rgba(18, 18, 22, 0.68);
            backdrop-filter: blur(28px) saturate(200%);
            -webkit-backdrop-filter: blur(28px) saturate(200%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 2rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.08);
            position: relative;
        }
        html.light-theme .store-glass-search {
            background: rgba(255, 255, 255, 0.85);
            border-color: rgba(0, 0, 0, 0.08);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.06);
        }

        .store-glass-input {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: var(--text-primary);
            transition: all 0.25s ease;
        }
        .store-glass-input:focus {
            background: rgba(255, 255, 255, 0.07);
            border-color: rgba(156, 5, 29, 0.8);
            box-shadow: 0 0 0 3px rgba(156, 5, 29, 0.25);
            outline: none;
        }
        html.light-theme .store-glass-input {
            background: rgba(0, 0, 0, 0.03);
            border-color: rgba(0, 0, 0, 0.12);
        }
        html.light-theme .store-glass-input:focus {
            background: #ffffff;
            border-color: #9c051d;
            box-shadow: 0 0 0 3px rgba(156, 5, 29, 0.15);
        }

        .store-glass-control {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: var(--text-primary);
            transition: all 0.2s ease;
        }
        .store-glass-control:hover {
            border-color: rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.07);
        }
        .store-glass-control:focus {
            border-color: rgba(156, 5, 29, 0.8);
            box-shadow: 0 0 0 3px rgba(156, 5, 29, 0.25);
            outline: none;
        }
        html.light-theme .store-glass-control {
            background: rgba(0, 0, 0, 0.03);
            border-color: rgba(0, 0, 0, 0.12);
        }
        html.light-theme .store-glass-control:hover {
            background: rgba(0, 0, 0, 0.05);
            border-color: rgba(0, 0, 0, 0.2);
        }
        html.light-theme .store-glass-control:focus {
            background: #ffffff;
            border-color: #9c051d;
            box-shadow: 0 0 0 3px rgba(156, 5, 29, 0.15);
        }

        .store-glass-control option {
            background: #141416;
            color: #ffffff;
        }
        html.light-theme .store-glass-control option {
            background: #ffffff;
            color: #111111;
        }

        /* Glass filter pill */
        .glass-filter-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 9999px;
            font-size: 11px;
            font-weight: 500;
            background: rgba(156, 5, 29, 0.14);
            border: 1px solid rgba(156, 5, 29, 0.35);
            color: var(--text-primary);
            transition: all 0.2s;
        }
        .glass-filter-pill:hover {
            background: rgba(156, 5, 29, 0.25);
            border-color: rgba(156, 5, 29, 0.6);
        }

        /* Mobile Floating Glass Box */
        .store-glass-floating {
            background: rgba(18, 18, 22, 0.92);
            backdrop-filter: blur(28px) saturate(200%);
            -webkit-backdrop-filter: blur(28px) saturate(200%);
            border: 1px solid rgba(255, 255, 255, 0.16);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.65), inset 0 1px 0 rgba(255, 255, 255, 0.12);
        }
        html.light-theme .store-glass-floating {
            background: rgba(255, 255, 255, 0.94);
            border-color: rgba(0, 0, 0, 0.12);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.15);
        }

        .store-floating-drawer {
            transform: translateY(120%);
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.25s ease;
            opacity: 0;
            pointer-events: none;
        }
        .store-floating-drawer.is-open {
            transform: translateY(0);
            opacity: 1;
            pointer-events: auto;
        }

        /* --- Box Levitation & Glow Animations --- */
        @keyframes floatBox {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                filter: drop-shadow(0 14px 25px rgba(0, 0, 0, 0.55));
            }
            50% {
                transform: translateY(-14px) rotate(-1.5deg) scale(1.025);
                filter: drop-shadow(0 28px 40px rgba(0, 0, 0, 0.4)) drop-shadow(0 0 25px rgba(156, 5, 29, 0.35));
            }
        }

        @keyframes glowPulse {
            0%, 100% {
                opacity: 0.25;
                transform: scale(1.1);
            }
            50% {
                opacity: 0.7;
                transform: scale(1.4);
            }
        }

        .animate-box-float {
            animation: floatBox 4.2s ease-in-out infinite;
            will-change: transform, filter;
        }

        .animate-box-glow {
            animation: glowPulse 4.2s ease-in-out infinite;
            will-change: transform, opacity;
        }

        /* --- Coming Soon Shimmer & Wave Float Animation --- */
        @keyframes shimmerText {
            0% {
                background-position: -200% center;
            }
            100% {
                background-position: 200% center;
            }
        }

        @keyframes comingSoonFloat {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-3px);
            }
        }

        .animate-coming-soon {
            display: inline-block;
            background: linear-gradient(
                90deg,
                #ffffff 0%,
                #ffffff 20%,
                #9c051d 50%,
                #ffffff 80%,
                #ffffff 100%
            );
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmerText 4.5s linear infinite, comingSoonFloat 3.5s ease-in-out infinite;
            will-change: transform, background-position;
            text-shadow: 0 0 30px rgba(156, 5, 29, 0.35);
        }

        html.light-theme .animate-coming-soon {
            background: linear-gradient(
                90deg,
                #111111 0%,
                #111111 20%,
                #9c051d 40%,
                #dc2626 50%,
                #9c051d 60%,
                #111111 80%,
                #111111 100%
            );
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 20px rgba(156, 5, 29, 0.2);
        }
    </style>

    {{-- ═══════════════════════════════════════════════════════════════════════
         DARK VEIL: STORE COMING SOON OVERLAY
         Veils the store catalog until products are pushed to production
    ═══════════════════════════════════════════════════════════════════════ --}}
    <div class="store-dark-veil absolute inset-0 z-50 bg-[#07070a]/90 backdrop-blur-[14px] flex items-start justify-center pt-16 md:pt-24 pb-32 px-4 select-none"
         style="min-height: 100%;">
        <div class="sticky top-28 max-w-xl w-full mx-auto flex flex-col items-center py-12 sm:py-16 px-6 sm:px-12 rounded-[2.5rem] store-glass-floating border border-white/15 shadow-[0_30px_90px_rgba(0,0,0,0.85)] text-center">

            {{-- Ambient glow inside card --}}
            <div class="absolute -top-16 -left-16 w-48 h-48 bg-[#9c051d] opacity-25 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-16 -right-16 w-48 h-48 bg-[#5a0612] opacity-35 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 flex flex-col items-center">

                {{-- Empty state / box icon with levitation & glow animations --}}
                <div class="relative mb-6">
                    <div class="absolute inset-0 bg-[#9c051d]/30 blur-2xl rounded-full scale-125 pointer-events-none animate-box-glow"></div>
                    <img src="{{ asset('box.png') }}"
                         alt="Coming Soon"
                         class="w-32 h-32 sm:w-40 sm:h-40 object-contain mx-auto relative z-10 animate-box-float drop-shadow-[0_16px_30px_rgba(0,0,0,0.6)]">
                </div>

                {{-- Coming Soon Heading with shimmering wave animation --}}
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-3 drop-shadow-md">
                    <span class="animate-coming-soon">...Coming Soon...</span>
                </h1>

                <p class="text-sm sm:text-base text-gray-600 max-w-md mx-auto mb-8 leading-relaxed font-light">
                    Our hardware products and software licenses have not yet been pushed to production. The store is currently being staged and will open soon.
                </p>

                {{-- Action CTAs --}}
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full sm:w-auto">
                    <a href="{{ url('/') }}"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-white text-black font-bold text-xs uppercase tracking-wider hover:bg-gray-100 transition shadow-lg hover:scale-105 active:scale-95">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        <span>Back to Home</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ── SECTION 1: GLASSMORPHIC SEARCH, FILTERS & CATEGORIES ────────── --}}
    <section class="store-glass-search max-w-[1400px] mx-auto px-6 sm:px-8 py-6 sm:py-7 relative z-20">
        <form id="store-filter-form" action="{{ route('store.index') }}" method="GET" class="space-y-6">

            {{-- 1. Search Bar & Primary Actions --}}
            <div class="flex flex-col lg:flex-row items-stretch lg:items-center gap-3">
                {{-- Live Search Input --}}
                <div class="relative flex-1">
                    <svg class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.65 16.65 7.5 7.5 0 0016.65 16.65z"></path>
                    </svg>
                    <input
                        type="text"
                        name="search"
                        id="store-search-input"
                        value="{{ $searchQuery }}"
                        placeholder="Search store products by name, specs, hardware or model..."
                        class="store-glass-input w-full pl-11 pr-24 py-3.5 rounded-2xl text-sm sm:text-base placeholder-gray-400 font-light"
                        autocomplete="off"
                    />
                    {{-- Clear search button --}}
                    @if($searchQuery)
                    <a href="{{ route('store.index', request()->except(['search', 'q', 'page'])) }}"
                       title="Clear search query"
                       class="absolute right-20 top-1/2 -translate-y-1/2 p-1.5 text-gray-400 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </a>
                    @endif
                    <button type="submit"
                        class="absolute right-2 top-1/2 -translate-y-1/2 px-4 py-2 rounded-xl bg-[#9c051d] hover:bg-[#7a0417] text-white text-xs font-semibold tracking-wider uppercase transition shadow-md flex items-center gap-1.5">
                        <span>Search</span>
                    </button>
                </div>

                {{-- Quick Sort Feature (Desktop) --}}
                <div class="hidden lg:flex items-center gap-2">
                    <div class="relative min-w-[200px]">
                        <select name="sort" id="store-sort-select" class="store-glass-control w-full py-3.5 pl-4 pr-10 rounded-2xl text-xs sm:text-sm font-medium appearance-none cursor-pointer">
                            <option value="recommended" {{ $sort === 'recommended' ? 'selected' : '' }}>★ Recommended</option>
                            <option value="popularity" {{ $sort === 'popularity' ? 'selected' : '' }}>🔥 Most Popular</option>
                            <option value="lowest_price" {{ $sort === 'lowest_price' ? 'selected' : '' }}>Price: Low to High</option>
                            <option value="highest_price" {{ $sort === 'highest_price' ? 'selected' : '' }}>Price: High to Low</option>
                            <option value="latest" {{ $sort === 'latest' ? 'selected' : '' }}>Newest Arrivals</option>
                        </select>
                        <svg class="w-4 h-4 absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- 2. Advanced Search Filters Row: Category, Type, Price Range, Availability (Desktop) --}}
            <div class="hidden lg:grid grid-cols-4 gap-3 pt-3 border-t border-white/10">
                {{-- Category Filter --}}
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Category</label>
                    <div class="relative">
                        <select name="category" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                            <option value="">All Categories</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->slug }}" {{ $activeCategory === $cat->slug ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>

                {{-- Product Type --}}
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Product Type</label>
                    <div class="relative">
                        <select name="type" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                            <option value="all" {{ $type === 'all' ? 'selected' : '' }}>All Types (Hardware & Digital)</option>
                            <option value="physical" {{ $type === 'physical' ? 'selected' : '' }}>Physical Hardware Only</option>
                            <option value="digital" {{ $type === 'digital' ? 'selected' : '' }}>Digital Software & AI</option>
                        </select>
                        <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>

                {{-- Price Range (in Ghana Cedis) --}}
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Price Range (GH₵)</label>
                    <div class="relative">
                        <select name="price_range" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                            <option value="all" {{ $priceRange === 'all' ? 'selected' : '' }}>All Prices</option>
                            <option value="under_500" {{ $priceRange === 'under_500' ? 'selected' : '' }}>Under GH₵500</option>
                            <option value="500_2000" {{ $priceRange === '500_2000' ? 'selected' : '' }}>GH₵500 &ndash; GH₵2,000</option>
                            <option value="2000_5000" {{ $priceRange === '2000_5000' ? 'selected' : '' }}>GH₵2,000 &ndash; GH₵5,000</option>
                            <option value="5000_above" {{ $priceRange === '5000_above' ? 'selected' : '' }}>GH₵5,000 &amp; Above</option>
                        </select>
                        <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>

                {{-- Availability / Stock --}}
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Availability</label>
                    <div class="relative">
                        <select name="stock" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                            <option value="all" {{ $stock === 'all' ? 'selected' : '' }}>All Availability</option>
                            <option value="in_stock" {{ $stock === 'in_stock' ? 'selected' : '' }}>In Stock Only</option>
                            <option value="sale" {{ $stock === 'sale' ? 'selected' : '' }}>Limited Offer / On Sale</option>
                            <option value="pre_order" {{ $stock === 'pre_order' ? 'selected' : '' }}>Pre-Order</option>
                        </select>
                        <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>
            </div>

            {{-- 3. Active Filters Bar & Reset Action (Desktop) --}}
            @if($hasActiveFilters)
            <div class="hidden lg:flex pt-3 border-t border-white/10 flex-wrap items-center justify-between gap-3">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="text-[11px] font-medium text-gray-400">Active filters:</span>

                    @if($searchQuery)
                    <a href="{{ route('store.index', request()->except(['search', 'q', 'page'])) }}" class="glass-filter-pill">
                        <span>Query: "{{ $searchQuery }}"</span>
                        <span class="text-xs">&times;</span>
                    </a>
                    @endif

                    @if($activeCategory)
                    <a href="{{ route('store.index', request()->except(['category', 'page'])) }}" class="glass-filter-pill">
                        <span>Category: {{ $categories->firstWhere('slug', $activeCategory)?->name ?? $activeCategory }}</span>
                        <span class="text-xs">&times;</span>
                    </a>
                    @endif

                    @if($type !== 'all')
                    <a href="{{ route('store.index', request()->except(['type', 'page'])) }}" class="glass-filter-pill">
                        <span>Type: {{ ucfirst($type) }}</span>
                        <span class="text-xs">&times;</span>
                    </a>
                    @endif

                    @if($priceRange !== 'all')
                    <a href="{{ route('store.index', request()->except(['price_range', 'min_price', 'max_price', 'page'])) }}" class="glass-filter-pill">
                        <span>Price: {{ str_replace('_', ' ', $priceRange) }}</span>
                        <span class="text-xs">&times;</span>
                    </a>
                    @endif

                    @if($stock !== 'all')
                    <a href="{{ route('store.index', request()->except(['stock', 'page'])) }}" class="glass-filter-pill">
                        <span>Stock: {{ str_replace('_', ' ', $stock) }}</span>
                        <span class="text-xs">&times;</span>
                    </a>
                    @endif

                    @if($sort !== 'recommended')
                    <a href="{{ route('store.index', request()->except(['sort', 'page'])) }}" class="glass-filter-pill">
                        <span>Sort: {{ str_replace('_', ' ', $sort) }}</span>
                        <span class="text-xs">&times;</span>
                    </a>
                    @endif
                </div>

                <a href="{{ route('store.index') }}"
                   class="text-xs font-semibold text-[#9c051d] hover:text-[#c40624] hover:underline flex items-center gap-1 transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    <span>Reset All Filters</span>
                </a>
            </div>
            @endif

        </form>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
         MOBILE FLOATING FILTER & SORT BOX (Floats bottom center on small screens)
    ═══════════════════════════════════════════════════════════════════════ --}}
    @php
        $activeFilterCount = ($activeCategory ? 1 : 0)
            + ($type !== 'all' ? 1 : 0)
            + ($priceRange !== 'all' ? 1 : 0)
            + ($stock !== 'all' ? 1 : 0)
            + ($sort !== 'recommended' ? 1 : 0);
    @endphp

    {{-- 1. Floating Pill Trigger at Bottom Center (Hidden while store is veiled) --}}
    <div id="mobile-filter-floating-trigger" class="hidden fixed bottom-5 left-1/2 -translate-x-1/2 z-40">
        <button type="button"
                id="open-mobile-filter-btn"
                class="flex items-center gap-2.5 px-5 py-3 rounded-full store-glass-floating shadow-[0_12px_35px_rgba(0,0,0,0.65)] text-black text-xs font-semibold tracking-wide hover:scale-105 active:scale-95 transition-all">
            <svg class="w-4 h-4 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
            </svg>
            <span>Filters &amp; Sort</span>
            @if($activeFilterCount > 0)
                <span class="w-5 h-5 rounded-full bg-[#9c051d] text-black text-[10px] font-bold flex items-center justify-center shadow-[0_0_10px_rgba(156,5,29,0.7)]">
                    {{ $activeFilterCount }}
                </span>
            @endif
        </button>
    </div>

    {{-- 2. Floating Filter Box (Bottom Sheet / Drawer at Bottom Center) --}}
    <div id="mobile-floating-backdrop" class="fixed inset-0 bg-black/65 backdrop-blur-sm z-40 hidden lg:hidden transition-opacity"></div>

    <div id="mobile-floating-panel"
         class="fixed inset-x-3 bottom-3 max-w-lg mx-auto z-50 store-glass-floating rounded-[2rem] p-5 sm:p-6 store-floating-drawer lg:hidden max-h-[85vh] overflow-y-auto">

        {{-- Drag handle bar --}}
        <div class="w-12 h-1 bg-white/20 rounded-full mx-auto mb-4 cursor-pointer" id="mobile-floating-handle"></div>

        <div class="flex items-center justify-between pb-3 border-b border-white/10 mb-4">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                </svg>
                <h3 class="text-sm font-bold tracking-tight text-black">Filters &amp; Sort</h3>
                @if($activeFilterCount > 0)
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-[#9c051d]/20 text-[#9c051d] border border-[#9c051d]/40">
                        {{ $activeFilterCount }} active
                    </span>
                @endif
            </div>
            <button type="button" id="close-mobile-filter-btn" class="p-1 text-gray-400 hover:text-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <form id="mobile-filter-form" action="{{ route('store.index') }}" method="GET" class="space-y-4">
            @if($searchQuery)
                <input type="hidden" name="search" value="{{ $searchQuery }}">
            @endif

            {{-- 1. Sort By --}}
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Sort By</label>
                <div class="relative">
                    <select name="sort" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                        <option value="recommended" {{ $sort === 'recommended' ? 'selected' : '' }}>Recommended</option>
                        <option value="popularity" {{ $sort === 'popularity' ? 'selected' : '' }}>Most Popular</option>
                        <option value="lowest_price" {{ $sort === 'lowest_price' ? 'selected' : '' }}>Price: Low to High</option>
                        <option value="highest_price" {{ $sort === 'highest_price' ? 'selected' : '' }}>Price: High to Low</option>
                        <option value="latest" {{ $sort === 'latest' ? 'selected' : '' }}>Newest Arrivals</option>
                    </select>
                    <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            {{-- 2. Category --}}
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Category</label>
                <div class="relative">
                    <select name="category" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                        <option value="">All Categories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->slug }}" {{ $activeCategory === $cat->slug ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            {{-- 3. Product Type --}}
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Product Type</label>
                <div class="relative">
                    <select name="type" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                        <option value="all" {{ $type === 'all' ? 'selected' : '' }}>All Types (Hardware & Digital)</option>
                        <option value="physical" {{ $type === 'physical' ? 'selected' : '' }}>Physical Hardware Only</option>
                        <option value="digital" {{ $type === 'digital' ? 'selected' : '' }}>Digital Software & AI</option>
                    </select>
                    <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            {{-- 4. Price Range (in Ghana Cedis) --}}
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Price Range (GH₵)</label>
                <div class="relative">
                    <select name="price_range" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                        <option value="all" {{ $priceRange === 'all' ? 'selected' : '' }}>All Prices</option>
                        <option value="under_500" {{ $priceRange === 'under_500' ? 'selected' : '' }}>Under GH₵500</option>
                        <option value="500_2000" {{ $priceRange === '500_2000' ? 'selected' : '' }}>GH₵500 &ndash; GH₵2,000</option>
                        <option value="2000_5000" {{ $priceRange === '2000_5000' ? 'selected' : '' }}>GH₵2,000 &ndash; GH₵5,000</option>
                        <option value="5000_above" {{ $priceRange === '5000_above' ? 'selected' : '' }}>GH₵5,000 &amp; Above</option>
                    </select>
                    <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            {{-- 5. Availability --}}
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Availability</label>
                <div class="relative">
                    <select name="stock" class="store-glass-control w-full py-2.5 pl-3.5 pr-8 rounded-xl text-xs font-medium appearance-none cursor-pointer">
                        <option value="all" {{ $stock === 'all' ? 'selected' : '' }}>All Availability</option>
                        <option value="in_stock" {{ $stock === 'in_stock' ? 'selected' : '' }}>In Stock Only</option>
                        <option value="sale" {{ $stock === 'sale' ? 'selected' : '' }}>Limited Offer / On Sale</option>
                        <option value="pre_order" {{ $stock === 'pre_order' ? 'selected' : '' }}>Pre-Order</option>
                    </select>
                    <svg class="w-3.5 h-3.5 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            {{-- Active filter tags in mobile panel --}}
            @if($hasActiveFilters)
            <div class="pt-3 border-t border-white/10 flex flex-wrap gap-1.5">
                @if($activeCategory)
                    <a href="{{ route('store.index', request()->except(['category', 'page'])) }}" class="glass-filter-pill">
                        <span>{{ $categories->firstWhere('slug', $activeCategory)?->name ?? $activeCategory }} &times;</span>
                    </a>
                @endif
                @if($type !== 'all')
                    <a href="{{ route('store.index', request()->except(['type', 'page'])) }}" class="glass-filter-pill">
                        <span>{{ ucfirst($type) }} &times;</span>
                    </a>
                @endif
                @if($priceRange !== 'all')
                    <a href="{{ route('store.index', request()->except(['price_range', 'min_price', 'max_price', 'page'])) }}" class="glass-filter-pill">
                        <span>{{ str_replace('_', ' ', $priceRange) }} &times;</span>
                    </a>
                @endif
                @if($stock !== 'all')
                    <a href="{{ route('store.index', request()->except(['stock', 'page'])) }}" class="glass-filter-pill">
                        <span>{{ str_replace('_', ' ', $stock) }} &times;</span>
                    </a>
                @endif
                @if($sort !== 'recommended')
                    <a href="{{ route('store.index', request()->except(['sort', 'page'])) }}" class="glass-filter-pill">
                        <span>{{ str_replace('_', ' ', $sort) }} &times;</span>
                    </a>
                @endif
            </div>
            @endif

            {{-- Actions --}}
            <div class="pt-2 flex items-center gap-2">
                @if($hasActiveFilters)
                <a href="{{ route('store.index') }}"
                   class="px-4 py-2.5 rounded-xl border border-white/15 text-xs text-gray-300 hover:text-white text-center font-medium transition">
                    Reset
                </a>
                @endif
                <button type="submit"
                        class="flex-1 py-2.5 px-4 bg-[#9c051d] hover:bg-[#7a0417] text-white rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-md text-center">
                    Apply Filters
                </button>
            </div>
        </form>
    </div>

    {{-- ── SECTION 2: "THE LATEST" FEATURED PRODUCTS BOUNDARY ─────────────── --}}
    @if($featuredProducts->isNotEmpty() && !$hasActiveFilters)
    <section class="store-section-boundary max-w-[1400px] mx-auto px-6 sm:px-10 py-8 sm:py-10">
        {{-- Section Title with clear margin to prevent any card underlap --}}
        <div class="mb-8 md:mb-10 relative z-20">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight" style="color: var(--text-primary);">
                The latest. <span class="font-normal text-base md:text-lg block sm:inline mt-1 sm:mt-0" style="color: var(--text-muted);">Take a look at what's new, right now.</span>
            </h2>
        </div>

        {{-- Carousel with well-proportioned card height (h-[390px]) --}}
        <div class="flex space-x-5 overflow-x-auto prod-scroll pb-2 pt-2 snap-x relative z-10">
            @foreach($featuredProducts as $fp)
            @php
                $cardStyleClasses = match($fp->card_style) {
                    'dark' => 'bg-[#111111] text-white',
                    'promo' => 'bg-gradient-to-br from-[#181818] to-[#282828] text-white',
                    default => 'bg-[var(--bg-primary)] text-[var(--text-primary)]',
                };
            @endphp
            <a href="{{ route('store.show', $fp->slug) }}"
               class="feat-card snap-start shrink-0 w-[290px] sm:w-[330px] md:w-[350px] h-[390px] md:h-[410px] rounded-[1.75rem] relative overflow-hidden group flex flex-col {{ $cardStyleClasses }}">

                {{-- Card top content --}}
                <div class="relative z-10 p-6 flex flex-col h-full">
                    @php $fpBadge = $fp->badge; @endphp
                    @if($fpBadge)
                    <span class="inline-block text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 rounded-full mb-2.5 w-fit badge-{{ $fpBadge['color'] }}">
                        {{ $fpBadge['text'] }}
                    </span>
                    @endif

                    <h3 class="text-lg font-bold leading-snug">{{ $fp->name }}</h3>
                    <p class="mt-1 text-xs font-medium opacity-80 line-clamp-2">
                        {{ $fp->short_description }}
                    </p>
                    <p class="mt-2 text-xs font-bold opacity-90">
                        From {{ $fp->display_price }}
                        @if($fp->is_on_sale)
                            <span class="line-through text-gray-400 ml-1 font-normal text-[11px]">{{ $fp->original_price }}</span>
                        @endif
                    </p>

                    {{-- Spacer pushes the image to the bottom --}}
                    <div class="flex-1"></div>
                </div>

                {{-- Background product image --}}
                <img src="{{ $fp->image_url }}"
                     alt="{{ $fp->name }}"
                     class="feat-img absolute bottom-0 left-0 w-full h-[52%] object-cover pointer-events-none">
            </a>
            @endforeach
        </div>
    </section>
    @endif

    {{-- ── SECTION 3: ALL PRODUCTS 3x3 BENTO GRID BOUNDARY ───────────────── --}}
    <section class="store-section-boundary max-w-[1400px] mx-auto px-6 sm:px-10 py-8 sm:py-10">
        {{-- Section Header --}}
        <div class="flex flex-col sm:flex-row sm:items-baseline justify-between gap-2 mb-8 md:mb-10 pb-4 border-b" style="border-color: var(--border-color);">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight" style="color: var(--text-primary);">
                    @if($searchQuery)
                        Results for &ldquo;{{ $searchQuery }}&rdquo;
                        @if($activeCategory)
                            <span class="font-normal text-base md:text-lg" style="color: var(--text-muted);">in {{ $categories->firstWhere('slug', $activeCategory)?->name }}</span>
                        @endif
                    @elseif($activeCategory)
                        {{ $products->total() }} {{ Str::plural('result', $products->total()) }}
                        <span class="font-normal text-base md:text-lg" style="color: var(--text-muted);">in {{ $categories->firstWhere('slug', $activeCategory)?->name }}</span>
                    @else
                        Our full collection.
                    @endif
                </h2>
            </div>
            <span class="text-xs font-medium tracking-wider uppercase" style="color: var(--text-muted);">{{ $products->total() }} products</span>
        </div>

        @if($products->isEmpty())
        <div class="flex flex-col items-center justify-center py-20 px-4 text-center">
            <div class="relative mb-6">
                <div class="absolute inset-0 bg-[#9c051d]/20 blur-2xl rounded-full scale-125 pointer-events-none animate-box-glow"></div>
                <img src="{{ asset('box.png') }}"
                     alt="No products found"
                     class="w-36 h-36 sm:w-44 sm:h-44 object-contain mx-auto relative z-10 animate-box-float drop-shadow-[0_16px_30px_rgba(0,0,0,0.5)]">
            </div>
            <h3 class="text-xl sm:text-2xl font-bold tracking-tight mb-2" style="color: var(--text-primary);">
                No products found
            </h3>
            <p class="text-xs sm:text-sm max-w-md mx-auto mb-6 leading-relaxed" style="color: var(--text-muted);">
                We couldn't find any products matching your current filters or search query. Try broadening your criteria or reset filters to explore our full catalog.
            </p>
            <a href="{{ route('store.index') }}"
               class="inline-flex items-center gap-2 px-6 py-2.5 bg-[#9c051d] hover:bg-[#7a0417] text-white rounded-full text-xs font-semibold uppercase tracking-wider transition shadow-lg hover:shadow-[0_0_20px_rgba(156,5,29,0.4)]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                <span>Reset All Filters</span>
            </a>
        </div>
        @else

        {{-- Bento Grid: 3x3 on large screens (lg:grid-cols-3), 2x2 on tablets/small screens (sm:grid-cols-2), 1-col on mobile --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-7">
            @foreach($products as $product)
            @php
                $badge = $product->badge;
                $isOutOfStock = $product->stock_status === 'out_of_stock';
            @endphp
            <div class="store-bento-card {{ $isOutOfStock ? 'is-out-of-stock' : '' }} overflow-hidden flex flex-col justify-between group">

                <div>
                    {{-- Product Image box with compact aspect ratio --}}
                    <a href="{{ route('store.show', $product->slug) }}" class="block relative overflow-hidden aspect-[16/10] rounded-t-[1.2rem] bg-black/5 dark:bg-white/5">
                        <img src="{{ $product->image_url }}"
                             alt="{{ $product->name }}"
                             class="bento-img w-full h-full object-cover {{ $badge && $badge['is_grayed'] ? 'grayscale-[40%] opacity-80' : '' }}"
                             loading="lazy">

                        {{-- Unified Badge Overlay (Exactly One Badge, Never Duplicated) --}}
                        @if($badge)
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full shadow-sm badge-{{ $badge['color'] }}">
                            {{ $badge['text'] }}
                        </span>
                        @endif
                    </a>

                    {{-- Product Details --}}
                    <div class="p-4 sm:p-5">
                        <div class="flex items-center justify-between text-[11px] mb-1">
                            <span class="text-[10px] font-bold tracking-widest uppercase" style="color: var(--text-muted);">
                                {{ $product->category->name }}
                            </span>
                            @if($product->popularity > 0)
                            <span class="inline-flex items-center gap-1 text-[10px] font-mono opacity-80" style="color: var(--text-muted);" title="Popularity score: {{ $product->popularity }}">
                                <svg class="w-3 h-3 text-[#9c051d]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.316.492-.53 1.056-.704 1.63-.375 1.234-.567 2.47-.698 3.518-.086.685-.13 1.272-.142 1.696a4.996 4.996 0 00-2.457-1.127 1 1 0 00-1.047.452c-.22.36-.316.784-.282 1.206.07.87.35 1.764.838 2.585C6.544 14.887 8.1 16 10 16c2.761 0 5-2.239 5-5 0-1.84-.73-3.49-1.92-4.664a8.97 8.97 0 00-.685-3.783zM10 14c-1.38 0-2.5-1.12-2.5-2.5 0-.44.115-.853.315-1.21.36.216.77.35 1.205.39.426.04.85-.02 1.24-.18.15.42.24.87.24 1.5 0 1.1-.9 2-2 2z" clip-rule="evenodd"></path></svg>
                                <span>{{ $product->popularity }}</span>
                            </span>
                            @endif
                        </div>
                        <a href="{{ route('store.show', $product->slug) }}" class="font-bold text-sm leading-snug line-clamp-1 transition hover:text-[#9c051d]" style="color: var(--text-primary);">
                            {{ $product->name }}
                        </a>
                        <p class="text-xs mt-1 line-clamp-2 leading-relaxed" style="color: var(--text-secondary);">
                            {{ $product->short_description }}
                        </p>

                        {{-- Price Row --}}
                        <div class="flex items-center gap-2 mt-3">
                            <span class="text-base font-bold" style="color: var(--text-primary);">{{ $product->display_price }}</span>
                            @if($product->is_on_sale)
                                <span class="text-xs text-gray-400 line-through">{{ $product->original_price }}</span>
                            @endif
                        </div>

                        {{-- Stock status --}}
                        <div class="flex items-center gap-1.5 mt-1.5">
                            @if($product->is_digital)
                                <span class="inline-block w-2 h-2 rounded-full bg-blue-500"></span>
                                <span class="text-[10px] font-medium text-blue-400">Instant Digital Delivery</span>
                            @else
                                @php
                                    $status = $product->stock_status;
                                    $dotClass = $status === 'in_stock' ? 'dot-in' : ($status === 'low_stock' ? 'dot-low' : 'dot-out');
                                    $statusLabel = $status === 'in_stock' ? 'In Stock' : ($status === 'low_stock' ? 'Low Stock' : 'Out of Stock');
                                @endphp
                                <span class="inline-block w-2 h-2 rounded-full {{ $dotClass }}"></span>
                                <span class="text-[10px] font-medium" style="color: var(--text-muted);">{{ $statusLabel }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="p-4 sm:p-5 pt-0">
                    <div class="flex gap-2 pt-3 border-t" style="border-color: var(--border-color);">
                        {{-- Add to Bag (AJAX, no reload) --}}
                        @if(!$isOutOfStock)
                        <form action="{{ route('bag.add') }}" method="POST" class="flex-1 ajax-add-to-cart-form">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" id="atb-{{ $product->id }}"
                                class="atb-btn w-full py-2.5 px-3 bg-[#9c051d] text-white rounded-xl text-xs font-bold hover:bg-[#7a0417] active:scale-95 transition shadow-sm flex items-center justify-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                                <span>Add to Bag</span>
                            </button>
                        </form>
                        @else
                        <button disabled class="flex-1 py-2.5 px-3 bg-gray-500/10 text-gray-400 rounded-xl text-xs font-semibold cursor-not-allowed">
                            Restock Soon
                        </button>
                        @endif

                        {{-- Wishlist --}}
                        <button title="Save to Wishlist"
                            class="w-9 h-9 flex items-center justify-center rounded-xl store-action-btn wishlist-btn"
                            data-product-id="{{ $product->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>

                        {{-- Quick View --}}
                        <a href="{{ route('store.show', $product->slug) }}" title="View details"
                            class="w-9 h-9 flex items-center justify-center rounded-xl store-action-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($products->hasPages())
        <div class="mt-14 pt-8 border-t flex flex-col sm:flex-row items-center justify-between gap-4" style="border-color: var(--border-color);">
            <div class="text-xs" style="color: var(--text-muted);">
                Showing <span class="font-semibold" style="color: var(--text-primary);">{{ $products->firstItem() ?? 0 }}</span> &ndash; <span class="font-semibold" style="color: var(--text-primary);">{{ $products->lastItem() ?? 0 }}</span> of <span class="font-semibold" style="color: var(--text-primary);">{{ $products->total() }}</span> items
            </div>

            <nav class="inline-flex items-center gap-1 p-1.5 rounded-2xl border backdrop-blur-md"
                 style="background: var(--bg-primary); border-color: var(--border-color); box-shadow: 0 4px 20px rgba(0,0,0,0.15);"
                 aria-label="Store Pagination Navigation">

                {{-- Previous Page Link --}}
                @if($products->onFirstPage())
                    <span class="inline-flex items-center justify-center gap-1.5 px-3.5 py-2 text-xs font-semibold rounded-xl opacity-35 cursor-not-allowed select-none"
                          style="color: var(--text-muted);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                        <span class="hidden sm:inline">Previous</span>
                    </span>
                @else
                    <a href="{{ $products->previousPageUrl() }}"
                       class="inline-flex items-center justify-center gap-1.5 px-3.5 py-2 text-xs font-semibold rounded-xl transition duration-200 group"
                       style="color: var(--text-secondary); background: transparent;"
                       onmouseover="this.style.background='rgba(156,5,29,0.12)'; this.style.color='#9c051d';"
                       onmouseout="this.style.background='transparent'; this.style.color='var(--text-secondary)';"
                       aria-label="Previous Page">
                        <svg class="w-4 h-4 transition-transform group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                        <span class="hidden sm:inline">Previous</span>
                    </a>
                @endif

                {{-- Page Numbers --}}
                <div class="flex items-center gap-1 mx-1">
                    @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                        @if($page == $products->currentPage())
                            <span class="inline-flex items-center justify-center min-w-[34px] h-[34px] px-3 text-xs font-bold rounded-xl text-white shadow-md select-none"
                                  style="background: #9c051d; box-shadow: 0 4px 14px rgba(156, 5, 29, 0.45);"
                                  aria-current="page">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                               class="inline-flex items-center justify-center min-w-[34px] h-[34px] px-3 text-xs font-semibold rounded-xl transition duration-200"
                               style="color: var(--text-secondary); background: transparent;"
                               onmouseover="this.style.background='rgba(156,5,29,0.12)'; this.style.color='#9c051d';"
                               onmouseout="this.style.background='transparent'; this.style.color='var(--text-secondary)';">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                </div>

                {{-- Next Page Link --}}
                @if($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}"
                       class="inline-flex items-center justify-center gap-1.5 px-3.5 py-2 text-xs font-semibold rounded-xl transition duration-200 group"
                       style="color: var(--text-secondary); background: transparent;"
                       onmouseover="this.style.background='rgba(156,5,29,0.12)'; this.style.color='#9c051d';"
                       onmouseout="this.style.background='transparent'; this.style.color='var(--text-secondary)';"
                       aria-label="Next Page">
                        <span class="hidden sm:inline">Next</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                @else
                    <span class="inline-flex items-center justify-center gap-1.5 px-3.5 py-2 text-xs font-semibold rounded-xl opacity-35 cursor-not-allowed select-none"
                          style="color: var(--text-muted);">
                        <span class="hidden sm:inline">Next</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </span>
                @endif

            </nav>
        </div>
        @endif
        @endif
    </section>

    {{-- ── SECTION 4: CUSTOM SOFTWARE CTA BANNER BOUNDARY ───────────────── --}}
    <section class="max-w-[1400px] mx-auto">
        <div class="bg-[#111] rounded-[2rem] px-8 py-14 md:px-16 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden border border-white/10 shadow-[0_24px_60px_rgba(0,0,0,0.35)]">

            {{-- Decorative glow --}}
            <div class="absolute -top-20 -left-20 w-72 h-72 bg-orange-500 opacity-10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-[#9c051d] opacity-10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-xl">
                <span class="inline-block text-[11px] font-bold uppercase tracking-widest text-orange-400 mb-3">Custom Software Solutions</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight">
                    Don't see what you need?<br>
                    <span class="text-gray-400">We build it from scratch.</span>
                </h2>
                <p class="mt-4 text-gray-400 text-sm leading-relaxed max-w-md">
                    From enterprise CRMs to custom AI integrations and SaaS platforms —
                    our engineering team delivers bespoke software solutions tailored to your exact requirements.
                    Get in touch and let's build something exceptional together.
                </p>
            </div>

            <div class="relative z-10 flex flex-col items-center gap-4 shrink-0">
                <a href="{{ url('/contact') }}"
                   class="inline-flex items-center gap-2 px-8 py-4 bg-white text-[#111] rounded-full text-sm font-bold hover:bg-gray-100 transition shadow-lg hover:shadow-xl hover:-translate-y-0.5 transform">
                    Get a Custom Quote
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <p class="text-gray-500 text-xs">Free consultation · No commitment required</p>
            </div>
        </div>
    </section>

</div>

{{-- ── AJAX ADD TO BAG & WISHLIST SCRIPTS ────────────────────────────────── --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // AJAX Add to Bag
        document.querySelectorAll('.ajax-add-to-cart-form').forEach(form => {
            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                const btn = this.querySelector('button[type="submit"]');
                const btnTextSpan = btn ? btn.querySelector('span') : null;
                const originalText = btnTextSpan ? btnTextSpan.textContent : (btn ? btn.textContent : '');

                if (btn) {
                    btn.disabled = true;
                    if (btnTextSpan) btnTextSpan.textContent = 'Adding...';
                }

                try {
                    const formData = new FormData(this);
                    const response = await fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    if (response.ok) {
                        const data = await response.json();
                        if (data.cartCount !== undefined && window.updateCartBadge) {
                            window.updateCartBadge(data.cartCount);
                        }

                        if (btnTextSpan) {
                            btnTextSpan.textContent = 'Added ✓';
                        }
                        if (btn) {
                            btn.classList.add('bg-green-600');
                            btn.classList.remove('bg-[#9c051d]');
                        }

                        if (window.showStoreToast) {
                            window.showStoreToast('Item added to your bag!');
                        }

                        setTimeout(() => {
                            if (btnTextSpan) btnTextSpan.textContent = originalText;
                            if (btn) {
                                btn.classList.remove('bg-green-600');
                                btn.classList.add('bg-[#9c051d]');
                                btn.disabled = false;
                            }
                        }, 1600);
                    } else {
                        if (btn) btn.disabled = false;
                        if (btnTextSpan) btnTextSpan.textContent = originalText;
                        if (window.showStoreToast) window.showStoreToast('Could not add item to bag', false);
                    }
                } catch (err) {
                    console.error('Add to cart error:', err);
                    if (btn) btn.disabled = false;
                    if (btnTextSpan) btnTextSpan.textContent = originalText;
                }
            });
        });

        // Wishlist Toggle
        document.querySelectorAll('.wishlist-btn').forEach(btn => {
            const productId = btn.dataset.productId;
            const key = `wishlist_${productId}`;
            const svg = btn.querySelector('svg');

            if (localStorage.getItem(key)) {
                svg.setAttribute('fill', '#e3000f');
                svg.setAttribute('stroke', '#e3000f');
                btn.classList.add('text-red-500');
            }

            btn.addEventListener('click', () => {
                const active = !!localStorage.getItem(key);
                if (active) {
                    localStorage.removeItem(key);
                    svg.setAttribute('fill', 'none');
                    svg.setAttribute('stroke', 'currentColor');
                    btn.classList.remove('text-red-500');
                } else {
                    localStorage.setItem(key, '1');
                    svg.setAttribute('fill', '#e3000f');
                    svg.setAttribute('stroke', '#e3000f');
                    btn.classList.add('text-red-500');
                    btn.animate([
                        {transform:'scale(1)'},
                        {transform:'scale(1.35)'},
                        {transform:'scale(1)'}
                    ], {duration:280, easing:'cubic-bezier(0.34,1.56,0.64,1)'});
                }
            });
        });

        // Auto-submit filter form on select change (Desktop)
        document.querySelectorAll('#store-filter-form select').forEach(select => {
            select.addEventListener('change', () => {
                const form = document.getElementById('store-filter-form');
                if (form) {
                    form.submit();
                }
            });
        });

        // Mobile Floating Filter Panel Drawer toggle
        const openMobileBtn = document.getElementById('open-mobile-filter-btn');
        const closeMobileBtn = document.getElementById('close-mobile-filter-btn');
        const mobilePanel = document.getElementById('mobile-floating-panel');
        const mobileBackdrop = document.getElementById('mobile-floating-backdrop');
        const mobileHandle = document.getElementById('mobile-floating-handle');

        function openMobileFilter() {
            if (mobilePanel) mobilePanel.classList.add('is-open');
            if (mobileBackdrop) mobileBackdrop.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileFilter() {
            if (mobilePanel) mobilePanel.classList.remove('is-open');
            if (mobileBackdrop) mobileBackdrop.classList.add('hidden');
            document.body.style.overflow = '';
        }

        if (openMobileBtn) openMobileBtn.addEventListener('click', openMobileFilter);
        if (closeMobileBtn) closeMobileBtn.addEventListener('click', closeMobileFilter);
        if (mobileBackdrop) mobileBackdrop.addEventListener('click', closeMobileFilter);
        if (mobileHandle) mobileHandle.addEventListener('click', closeMobileFilter);

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobilePanel && mobilePanel.classList.contains('is-open')) {
                closeMobileFilter();
            }
        });
    });
</script>

</x-main-layout>