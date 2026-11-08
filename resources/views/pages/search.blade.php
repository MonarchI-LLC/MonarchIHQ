<x-main-layout
    title="Search Results — MonarchI HQ"
    description="Search products, articles, projects, and services across MonarchI HQ."
    keywords="Monarchi Search, Products, Articles, Projects, Services">

    <section class="relative pt-32 pb-24 px-4 sm:px-6 lg:px-8 min-h-[75vh]" style="background: var(--bg-primary);">
        <!-- Ambient accents -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[-10%] right-[-10%] w-[50%] h-[60%] rounded-full opacity-20 blur-[130px]" style="background: radial-gradient(circle, #9c051d, transparent 70%);"></div>
            <div class="absolute bottom-[-10%] left-[-10%] w-[45%] h-[50%] rounded-full opacity-10 blur-[120px]" style="background: radial-gradient(circle, #3b82f6, transparent 70%);"></div>
        </div>

        <div class="max-w-[1100px] mx-auto relative z-10">

            {{-- Search Header --}}
            <div class="mb-10 text-center md:text-left">
                <span class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-2 block">Search MonarchI</span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold tracking-tight text-white mb-4">
                    @if(!empty($query))
                        Results for <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-200 via-gray-300 to-gray-400">&ldquo;{{ $query }}&rdquo;</span>
                    @else
                        Explore Everything
                    @endif
                </h1>
                <p class="text-sm sm:text-base text-gray-400 font-light">
                    Found <span class="text-white font-medium">{{ $total }}</span> matching {{ Str::plural('result', $total) }} across Store Products, Articles, Platforms, and Services.
                </p>

                {{-- Interactive Search Box on Page --}}
                <form action="{{ route('search') }}" method="GET" class="mt-6 max-w-2xl relative">
                    <input
                        type="text"
                        name="q"
                        value="{{ $query }}"
                        placeholder="Search products, articles, services, projects..."
                        class="w-full bg-white/[0.04] border border-white/15 focus:border-[#9c051d] rounded-2xl py-3.5 pl-12 pr-28 text-white placeholder-gray-500 text-sm sm:text-base outline-none transition shadow-lg focus:ring-1 focus:ring-[#9c051d]"
                        autocomplete="off"
                    />
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.65 16.65 7.5 7.5 0 0016.65 16.65z"></path>
                    </svg>
                    <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 px-5 py-2 rounded-xl bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-xs font-semibold uppercase tracking-wider transition">
                        Search
                    </button>
                </form>
            </div>

            @if($total === 0)
                {{-- Empty State --}}
                <div class="py-16 text-center border border-white/10 rounded-3xl bg-white/[0.02] backdrop-blur-md p-8 sm:p-12">
                    <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 text-gray-400 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">No matching results found</h3>
                    <p class="text-gray-400 text-sm max-w-md mx-auto mb-6 font-light">
                        We couldn't find anything matching your search term. Try checking for spelling errors, using more general terms, or browse popular destinations below.
                    </p>
                    <div class="flex items-center justify-center gap-3 flex-wrap">
                        <a href="/store" class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/15 text-white text-xs font-medium border border-white/10 transition">Store Products</a>
                        <a href="/services" class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/15 text-white text-xs font-medium border border-white/10 transition">Services</a>
                        <a href="/blog" class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/15 text-white text-xs font-medium border border-white/10 transition">Articles &amp; News</a>
                        <a href="/contact" class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/15 text-white text-xs font-medium border border-white/10 transition">Contact Us</a>
                    </div>
                </div>
            @else

                <div class="space-y-14">

                    {{-- 1. Store Products Section --}}
                    @if($products->isNotEmpty())
                        <div>
                            <div class="flex items-center justify-between pb-3 border-b border-white/10 mb-6">
                                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                                    <span>Store Products ({{ $products->count() }})</span>
                                </h2>
                                <a href="/store" class="text-xs text-gray-400 hover:text-[#9c051d] transition-colors">Explore Store &rarr;</a>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($products as $product)
                                    <a href="{{ route('store.show', $product->slug) }}" class="group block rounded-2xl border border-white/10 bg-white/[0.02] hover:bg-white/[0.04] p-5 transition-all duration-300 hover:border-white/25 shadow-lg">
                                        <div class="aspect-video w-full rounded-xl overflow-hidden bg-black/40 border border-white/5 mb-4 relative">
                                            @if($product->image_path)
                                                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-gray-600">
                                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                                </div>
                                            @endif
                                            @if($product->badge_text)
                                                <span class="absolute top-2 left-2 px-2 py-0.5 rounded text-[10px] font-semibold bg-[#9c051d]/80 text-white">
                                                    {{ $product->badge_text }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="text-[11px] font-mono text-gray-400 uppercase tracking-wider mb-1">
                                            {{ $product->category?->name ?? 'Hardware' }}
                                        </div>
                                        <h3 class="text-base font-semibold text-white group-hover:text-[#9c051d] transition-colors mb-2">
                                            {{ $product->name }}
                                        </h3>
                                        <p class="text-xs text-gray-400 line-clamp-2 mb-4 font-light">
                                            {{ $product->short_description ?: Str::limit($product->description, 90) }}
                                        </p>
                                        <div class="flex items-center justify-between pt-2 border-t border-white/5">
                                            <div class="text-sm font-bold text-white font-mono">
                                                ${{ number_format($product->sale_price ?? $product->price, 2) }}
                                                @if($product->sale_price)
                                                    <span class="text-xs text-gray-500 line-through font-normal ml-1.5">${{ number_format($product->price, 2) }}</span>
                                                @endif
                                            </div>
                                            <span class="text-xs font-medium text-[#9c051d] group-hover:translate-x-0.5 transition-transform">View &rarr;</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- 2. Platform Products & Specialized Services Section --}}
                    @if($platforms->isNotEmpty())
                        <div>
                            <div class="flex items-center justify-between pb-3 border-b border-white/10 mb-6">
                                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                                    <span>Products &amp; Specialized Services ({{ $platforms->count() }})</span>
                                </h2>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($platforms as $item)
                                    <a href="{{ $item['url'] }}" class="group block rounded-2xl border border-white/10 bg-white/[0.02] hover:bg-white/[0.05] p-6 transition-all duration-300 hover:border-white/25 shadow-lg">
                                        <div class="flex items-center justify-between mb-3">
                                            <span class="text-[10px] font-mono uppercase tracking-widest text-blue-400 bg-blue-500/10 px-2 py-0.5 rounded border border-blue-500/20">
                                                {{ $item['category'] }}
                                            </span>
                                            <span class="text-[10px] font-mono text-gray-500">
                                                {{ $item['badge'] }}
                                            </span>
                                        </div>
                                        <h3 class="text-xl font-bold text-white group-hover:text-[#9c051d] transition-colors mb-2 flex items-center justify-between">
                                            <span>{{ $item['title'] }}</span>
                                            <svg class="w-4 h-4 text-gray-500 group-hover:text-[#9c051d] group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                        </h3>
                                        <p class="text-xs text-gray-400 font-light leading-relaxed">
                                            {{ $item['description'] }}
                                        </p>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- 3. Articles & News Section --}}
                    @if($articles->isNotEmpty())
                        <div>
                            <div class="flex items-center justify-between pb-3 border-b border-white/10 mb-6">
                                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                                    <span>Articles &amp; Trending Insights ({{ $articles->count() }})</span>
                                </h2>
                                <a href="/blog" class="text-xs text-gray-400 hover:text-[#9c051d] transition-colors">View All Articles &rarr;</a>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach($articles as $article)
                                    <a href="{{ $article->external_url ?: url('/blog#' . $article->slug) }}" target="{{ $article->external_url ? '_blank' : '_self' }}" class="group block rounded-2xl border border-white/10 bg-white/[0.02] hover:bg-white/[0.05] p-6 transition-all duration-300 hover:border-white/25 shadow-lg">
                                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-2">
                                            <span class="text-[#9c051d] font-medium uppercase tracking-wider text-[11px]">{{ \App\Models\NewsArticle::getCategoryLabel($article->category) }}</span>
                                            <span>&bull;</span>
                                            <span>{{ $article->read_time_minutes }} min read</span>
                                            @if($article->published_at)
                                                <span>&bull;</span>
                                                <span>{{ $article->published_at->format('M d, Y') }}</span>
                                            @endif
                                        </div>
                                        <h3 class="text-lg font-bold text-white group-hover:text-[#9c051d] transition-colors mb-2">
                                            {{ $article->title }}
                                        </h3>
                                        <p class="text-xs sm:text-sm text-gray-400 line-clamp-2 font-light leading-relaxed">
                                            {{ $article->excerpt ?: Str::limit(strip_tags($article->body), 120) }}
                                        </p>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- 4. Projects & Careers Section --}}
                    @if($projects->isNotEmpty() || $careers->isNotEmpty())
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @if($projects->isNotEmpty())
                                <div>
                                    <div class="pb-3 border-b border-white/10 mb-6">
                                        <h2 class="text-lg font-bold text-white">Portfolio Projects ({{ $projects->count() }})</h2>
                                    </div>
                                    <div class="space-y-4">
                                        @foreach($projects as $project)
                                            <a href="{{ url('/projects#' . $project->slug) }}" class="block p-4 rounded-xl border border-white/10 bg-white/[0.02] hover:bg-white/[0.05] transition">
                                                <div class="flex items-center justify-between text-xs mb-1">
                                                    <span class="text-blue-400 font-mono">{{ $project->domain }}</span>
                                                </div>
                                                <div class="font-bold text-white text-sm mb-1">{{ $project->title }}</div>
                                                <p class="text-xs text-gray-400 line-clamp-1 font-light">{{ $project->description }}</p>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if($careers->isNotEmpty())
                                <div>
                                    <div class="pb-3 border-b border-white/10 mb-6">
                                        <h2 class="text-lg font-bold text-white">Open Roles ({{ $careers->count() }})</h2>
                                    </div>
                                    <div class="space-y-4">
                                        @foreach($careers as $job)
                                            <a href="/careers" class="block p-4 rounded-xl border border-white/10 bg-white/[0.02] hover:bg-white/[0.05] transition">
                                                <div class="flex items-center justify-between text-xs mb-1">
                                                    <span class="text-emerald-400 font-mono">{{ $job->employmentTypeLabel() }}</span>
                                                    <span class="text-gray-400">{{ $job->location }}</span>
                                                </div>
                                                <div class="font-bold text-white text-sm mb-1">{{ $job->title }}</div>
                                                <p class="text-xs text-gray-400 font-light">{{ $job->department }}</p>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif

                </div>

            @endif

        </div>
    </section>

</x-main-layout>
