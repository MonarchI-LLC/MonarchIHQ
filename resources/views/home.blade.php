<x-main-layout
    title="MonarchI HQ — Enterprise AI, Intelligent Systems & Software Engineering"
    description="MonarchI HQ engineers enterprise-grade AI systems, intelligent workflow automations, bespoke software, and cutting-edge digital infrastructure for leading global organizations."
    keywords="MonarchI, MonarchI HQ, Enterprise AI, Workflow Automation, Software Development, SaaS Platforms, Cloud Architecture, Web Development, Intelligent Systems, Cyber Security, Tech Africa, Digital Transformation, MAI AI">

    {{-- Semantic H1 for SEO Search Engines & Accessibility --}}
    <h1 class="sr-only">MonarchI HQ — Enterprise AI, Intelligent Systems, Workflow Automation & Software Engineering</h1>

    {{-- =============================================
         HERO SECTION — Always dark, no theme changes
    ============================================= --}}
    <section class="hero-section relative h-screen w-full overflow-hidden flex flex-col pt-12">

        <img src="{{ asset('images/world-tech.png') }}" alt="Hero Background"
            class="absolute inset-0 w-full h-full object-cover z-0" />

        <div
            class="absolute inset-0 bg-black/2 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(0,0,0,0.85)_100%)] z-0">
        </div>

        <div class="absolute top-20 left-1/2 -translate-x-1/2 z-20 flex justify-center w-full px-4">

            <div
                class="bg-white/10 backdrop-blur-md border border-white/10 rounded-full px-5 py-2 flex items-center gap-3 shadow-[0_0_30px_rgba(0,0,0,0.5)]">

                <img src="{{ asset('images/ai-mind.png') }}" alt="AI"
                    class="h-4 w-4 object-contain invert opacity-70" />

                <p class="text-[11px] md:text-xs font-light tracking-wide text-gray-200">Tech that works hard — <span
                        class="text-white font-medium">So you don&apos;t have to.</span></p>

            </div>

        </div>

        <div
            class="absolute top-[30%] md:top-[38%] left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 w-[95%] md:w-[80%] max-w-5xl pointer-events-none drop-shadow-2xl">

            <svg viewBox="0 0 1000 300" class="w-full h-auto overflow-visible">

                <defs>

                    <path id="text-arc" d="M 50,220 Q 500,-20 950,220" />

                    <linearGradient id="glass-grad" x1="0%" y1="0%" x2="0%" y2="100%">

                        <stop offset="0%"   stop-color="#ffffff" stop-opacity="1" />

                        <stop offset="45%"  stop-color="#ffffff" stop-opacity="0.85" />

                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0.05" />

                    </linearGradient>

                    <filter id="globe-glow">

                        <feDropShadow dx="0" dy="15" stdDeviation="15" flood-color="#ea580c" flood-opacity="0.6" />

                        <feDropShadow dx="0" dy="30" stdDeviation="25" flood-color="#f59e0b" flood-opacity="0.3" />

                    </filter>

                </defs>

                <text fill="url(#glass-grad)" filter="url(#globe-glow)"
                    font-family="system-ui, -apple-system, sans-serif" font-weight="900" font-size="48"
                    letter-spacing="6">

                    <textPath href="#text-arc" startOffset="50%" text-anchor="middle">

                        TECHNOLOGY IS EVOLVING

                    </textPath>

                </text>

                <text fill="url(#glass-grad)" filter="url(#globe-glow)"
                    font-family="system-ui, -apple-system, sans-serif" font-weight="300" font-size="24"
                    letter-spacing="12" transform="translate(0, 40)">

                    <textPath href="#text-arc" startOffset="50%" text-anchor="middle">

                        SO SHOULD YOUR BUSINESS

                    </textPath>

                </text>

            </svg>

        </div>

        <div
            class="absolute top-[38%] md:top-[48%] left-1/2 -translate-x-1/2 z-30 flex flex-row items-center gap-3 md:gap-6 w-full justify-center px-4">

            <a href="/contact"
                class="group relative px-6 md:px-8 py-3 rounded-full bg-white/95 backdrop-blur-md text-black font-semibold text-[7px] md:text-xs uppercase tracking-[0.15em] transition-all duration-300 hover:scale-105 hover:bg-white hover:shadow-[0_0_30px_rgba(255,255,255,0.4)] flex items-center gap-2 md:gap-3 ">

                Start a Project

                <svg class="w-3.5 h-3.5 md:w-4 md:h-4 transition-transform duration-300 group-hover:translate-x-1"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>

            </a>

            <a href="/store"
                class="group px-6 md:px-8 py-3 rounded-full liquid-btn text-white font-medium text-[7px] md:text-xs uppercase tracking-[0.15em] transition-all duration-300 hover:scale-105 hover:bg-white/10 hover:border-white/40 flex items-center gap-2 md:gap-3">

                Visit Store

                <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-gray-300 transition-transform duration-300 group-hover:translate-x-1 group-hover:text-white"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>

            </a>

        </div>

        <div class="absolute right-4 md:right-12 bottom-4 md:bottom-[55px] z-20 w-[calc(100%-2rem)] md:w-auto max-w-[calc(100%-2rem)] md:max-w-[calc(100%-4rem)]">

            <div class="flex flex-col md:flex-row md:items-end justify-end gap-2 md:gap-4 w-full">

                <div class="liquid-card p-4 md:p-6 w-full md:w-7/12 lg:w-[50rem] lg:h-full lg:p-10 flex flex-col justify-between group min-w-0">

                    <div>

                        <h4 class="text-sm md:text-base font-medium text-white mb-1">Evolution of Intelligence : AI
                            Adoption in Africa</h4>

                        <p class="text-[11px] md:text-sm text-gray-400">The evolution of AI has opened new possibilities
                            for economic growth and technological advancement worldwide. In Africa, AI is gaining
                            momentum across industries, offering innovative solutions to long-standing social and
                            economic challenges.</p>
                    </div>

                    <a href="/blog" target="_blank" rel="noopener noreferrer"
                        class="text-[10px] md:text-xs text-gray-300 mt-3 md:mt-6 flex items-center gap-1 group-hover:text-white transition-colors uppercase tracking-wider w-max">

                        &rarr; Learn more...

                    </a>

                </div>

                <div class="grid grid-cols-2 gap-2 md:gap-4 w-full md:w-auto h-fit shrink-0">

                    <div
                        class="liquid-card drop-shadow-[0_10px_20px_rgba(0,0,0,0.8)] py-2 px-2 md:py-4 md:px-4 w-full md:w-36 lg:w-40 h-fit flex flex-col justify-center items-center text-center">

                        <h4 class="text-xl md:text-2xl lg:text-3xl font-light text-white"><span class="stat-counter"
                                data-target="22">0</span>+</h4>

                        <span
                            class="text-[8px] md:text-[9px] text-gray-400 uppercase tracking-widest leading-tight mt-1 md:mt-2">Satisfied<br>Clients</span>

                    </div>

                    <div
                        class="liquid-card drop-shadow-[0_10px_20px_rgba(0,0,0,0.8)] py-2 px-2 md:py-4 md:px-4 w-full md:w-36 lg:w-40 h-fit flex flex-col justify-center items-center text-center">

                        <h4 class="text-xl md:text-2xl lg:text-3xl font-light text-white"><span class="stat-counter"
                                data-target="28">0</span>+</h4>

                        <span
                            class="text-[8px] md:text-[9px] text-gray-400 uppercase tracking-widest leading-tight mt-1 md:mt-2">Completed<br>Projects</span>

                    </div>

                    <div
                        class="liquid-card drop-shadow-[0_10px_20px_rgba(0,0,0,0.8)] py-2 px-2 md:py-4 md:px-4 w-full md:w-36 lg:w-40 h-fit flex flex-col justify-center items-center text-center">

                        <h4 class="text-xl md:text-2xl lg:text-3xl font-light text-white"><span class="stat-counter"
                                data-target="4">0</span>+</h4>

                        <span
                            class="text-[8px] md:text-[9px] text-gray-400 uppercase tracking-widest leading-tight mt-1 md:mt-2">Star<br>Rating</span>
                    </div>

                    <div
                        class="liquid-card drop-shadow-[0_10px_20px_rgba(0,0,0,0.8)] py-2 px-2 md:py-4 md:px-4 w-full md:w-36 lg:w-40 h-fit flex flex-col justify-center items-center text-center">

                        <h4 class="text-xl md:text-2xl lg:text-3xl font-light text-white"><span class="stat-counter"
                                data-target="97">0</span>%</h4>

                        <span
                            class="text-[8px] md:text-[9px] text-gray-400 uppercase tracking-widest leading-tight mt-1 md:mt-2">System<br>Uptime</span>
                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- =============================================
         PROPRIETARY PRODUCTS SHOWCASE SECTION
    ============================================= --}}
    <section id="products-section" class="products-section relative py-28 px-4 sm:px-6 lg:px-8 z-10 border-t overflow-hidden"
             style="border-color: var(--border-color); background: var(--bg-primary);">

        {{-- Interactive Glyph Particles Canvas --}}
        <canvas id="monarch-glyph-canvas" class="absolute inset-0 w-full h-full pointer-events-none z-0 opacity-70"></canvas>

        {{-- Ambient Lighting Accents --}}
        <div class="absolute -top-32 -right-32 w-[600px] h-[600px] rounded-full pointer-events-none opacity-20 blur-[140px]"
             style="background: radial-gradient(circle, #9c051d 0%, transparent 70%);"></div>
        <div class="absolute top-1/2 -left-48 w-[500px] h-[500px] rounded-full pointer-events-none opacity-10 blur-[130px]"
             style="background: radial-gradient(circle, #c4203a 0%, transparent 70%);"></div>
        <div class="absolute -bottom-32 right-1/4 w-[550px] h-[550px] rounded-full pointer-events-none opacity-10 blur-[140px]"
             style="background: radial-gradient(circle, #ffffff 0%, transparent 75%);"></div>

        <div class="max-w-[1240px] mx-auto relative z-10">

            {{-- Products Section Header --}}
            <div class="mb-20 md:mb-24 reveal text-left">
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                    <div>
                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-semibold tracking-tight leading-[1.1]" style="color: var(--text-primary);">
                            Engineered for Scale.<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-400 via-gray-300 to-gray-200">
                                Architected for Absolute Trust.
                            </span>
                        </h2>
                    </div>
                    <p class="text-base sm:text-lg max-w-lg leading-relaxed font-light" style="color: var(--text-secondary);">
                        Explore our flagship platforms engineered to automate business processes, scale corporate event operations, and multi-asset real estate management.
                    </p>
                </div>
            </div>

            {{-- Main Products Showcase Cards --}}
            <div class="space-y-16 lg:space-y-24">

                {{-- =========================================
                     PRODUCT 1: Verified (Identity & KYC Provider)
                ========================================= --}}
                <div class="product-card-3d group relative rounded-[32px] p-8 sm:p-10 lg:p-14 border border-white/10 overflow-hidden transition-all duration-500 hover:border-white/25 shadow-2xl reveal"
                     style="background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%), #05050a;"
                     data-product="verified">

                    {{-- Specular cursor glare layer --}}
                    <div class="glare-effect absolute inset-0 pointer-events-none transition-opacity duration-300 opacity-0 z-0"></div>

                    {{-- Card Grid: Description & Visual Terminal --}}
                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                        {{-- Left Column: Core Narrative & Features (7 cols) --}}
                        <div class="lg:col-span-7 space-y-6">
                            {{-- Product Meta Badge --}}
                            <div class="flex items-center gap-3 flex-wrap">
                                <span class="px-3.5 py-1 rounded-full text-[11px] font-mono tracking-wider uppercase font-semibold bg-[#9c051d]/20 text-[#e8788a] border border-[#9c051d]/40">
                                    Product 01 // Identity &amp; Compliance
                                </span>
                                <span class="flex items-center gap-1.5 text-[11px] text-emerald-400 font-mono tracking-wide">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    API Gateway Live
                                </span>
                            </div>

                            {{-- Product Title & Headline --}}
                            <div>
                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-2 flex items-center gap-3">
                                    Verified
                                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[#9c051d]/30 text-[#e8788a] border border-[#9c051d]/50 text-sm">
                                        ✓
                                    </span>
                                </h3>
                                <p class="text-lg sm:text-xl font-normal text-gray-300">
                                    Sovereign Identity Provider &amp; Real-Time KYC Verification API
                                </p>
                            </div>

                            {{-- Deep Narrative --}}
                            <p class="text-sm sm:text-base text-gray-400 leading-relaxed font-light">
                                Verified allows enterprise institutions, banks, and fintechs to complete regulatory KYC in seconds by querying our API whenever a customer has completed identity verification on our platform. Users create a single sovereign account and complete comprehensive multi-layer checks—including 3D liveness detection, government ID &amp; nationality verification, address authentication, fingerprint capture, and FaceID. When a partner company requests KYC data, the user is redirected to our secure platform, logs into their account, and explicitly approves the transmission.
                            </p>

                            {{-- Capability Badges --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">3D Liveness &amp; FaceID</div>
                                        <div class="text-gray-400 font-light">Passive biometric depth anti-spoofing</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Nationality &amp; ID Checks</div>
                                        <div class="text-gray-400 font-light">Government database &amp; passport verification</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Fingerprint &amp; Address Proof</div>
                                        <div class="text-gray-400 font-light">Physical biometric capture &amp; utility mapping</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">User-Approved API Handshake</div>
                                        <div class="text-gray-400 font-light">Explicit user login &amp; one-click approval</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Action Buttons --}}
                            <div class="flex items-center gap-4 pt-4 flex-wrap">
                                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-xs sm:text-sm font-semibold uppercase tracking-wider transition-all duration-300 hover:scale-105 shadow-[0_0_25px_rgba(156,5,29,0.4)]">
                                    <span>Integrate Verified API</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <a href="/services" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/5 hover:bg-white/10 text-gray-200 border border-white/15 text-xs sm:text-sm font-medium transition-all duration-200 hover:scale-105">
                                    <span>API Specs &amp; Flow</span>
                                </a>
                            </div>
                        </div>

                        {{-- Right Column: Interactive 3D KYC Terminal Preview (5 cols) --}}
                        <div class="lg:col-span-5 relative">
                            <div class="relative rounded-2xl border border-white/10 bg-black/60 backdrop-blur-xl p-6 sm:p-7 shadow-[0_20px_50px_rgba(0,0,0,0.8)] overflow-hidden">
                                {{-- Terminal Top Bar --}}
                                <div class="flex items-center justify-between pb-4 border-b border-white/10 mb-5">
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 rounded-full bg-[#9c051d]"></div>
                                        <div class="w-3 h-3 rounded-full bg-amber-500/80"></div>
                                        <div class="w-3 h-3 rounded-full bg-emerald-500/80"></div>
                                        <span class="text-[10px] font-mono text-gray-400 ml-2">verified-auth-gateway.v1</span>
                                    </div>
                                    <span class="text-[10px] font-mono text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/30">
                                        AES-256 ENCRYPTED
                                    </span>
                                </div>

                                {{-- Biometric Radar Visualizer --}}
                                <div class="relative flex items-center justify-center py-6 mb-4">
                                    {{-- Outer scanning rings --}}
                                    <div class="w-32 h-32 rounded-full border border-dashed border-[#9c051d]/40 flex items-center justify-center animate-spin" style="animation-duration: 18s;">
                                        <div class="w-24 h-24 rounded-full border border-white/15 flex items-center justify-center"></div>
                                    </div>
                                    {{-- Center Biometric Scanner Icon --}}
                                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                                        <svg class="w-12 h-12 text-[#e8788a] drop-shadow-[0_0_15px_rgba(156,5,29,0.8)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 004 11m0 0a8 8 0 00.99 3.868"/>
                                        </svg>
                                        <span class="text-[10px] font-mono text-gray-300 mt-1">BIOMETRIC MATCH: 99.98%</span>
                                    </div>
                                </div>

                                {{-- Incoming Request Prompt Simulation --}}
                                <div class="p-4 rounded-xl bg-white/[0.04] border border-white/10 space-y-3">
                                    <div class="flex items-center justify-between text-xs">
                                        <span class="text-gray-400">Incoming KYC Request:</span>
                                        <span class="text-white font-mono text-[11px]">Apex Financial Corp</span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs">
                                        <span class="text-gray-400">Target Identity Token:</span>
                                        <span class="text-gray-300 font-mono text-[11px]">#VID-884920-GH</span>
                                    </div>
                                    <div class="pt-2 border-t border-white/10 flex items-center justify-between">
                                        <span class="text-[11px] text-gray-400">User Consent Protocol:</span>
                                        <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/30">
                                            <span>Approved by User</span> ✓
                                        </span>
                                    </div>
                                </div>

                                {{-- Micro Terminal Stream --}}
                                <div class="mt-4 font-mono text-[10px] text-gray-500 space-y-1">
                                    <p>&gt; GET /kyc/status/VID-884920 → 200 OK (24ms)</p>
                                    <p class="text-emerald-500/80">&gt; Biometric hash validated via zero-knowledge proof</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- =========================================
                     PRODUCT 2: ticketMan (Event Biometric Management)
                ========================================= --}}
                <div class="product-card-3d group relative rounded-[32px] p-8 sm:p-10 lg:p-14 border border-white/10 overflow-hidden transition-all duration-500 hover:border-white/25 shadow-2xl reveal"
                     style="background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%), #05050a;"
                     data-product="ticketman">

                    {{-- Specular cursor glare layer --}}
                    <div class="glare-effect absolute inset-0 pointer-events-none transition-opacity duration-300 opacity-0 z-0"></div>

                    {{-- Card Grid: Visual Terminal on Left, Text & Features on Right --}}
                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                        {{-- Left Column: Interactive 3D Event Pass & Biometric Gate (5 cols) --}}
                        <div class="lg:col-span-5 order-2 lg:order-1 relative">
                            <div class="relative rounded-2xl border border-white/10 bg-black/60 backdrop-blur-xl p-6 sm:p-7 shadow-[0_20px_50px_rgba(0,0,0,0.8)] overflow-hidden">
                                {{-- Pass Header --}}
                                <div class="flex items-center justify-between pb-3 border-b border-white/10 mb-4">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded-full bg-[#9c051d]"></span>
                                        <span class="text-xs font-mono text-white tracking-widest uppercase">ticketMan GATE 04</span>
                                    </div>
                                    <span class="text-[10px] font-mono text-[#e8788a] bg-[#9c051d]/20 px-2 py-0.5 rounded border border-[#9c051d]/40">
                                        BIOMETRIC PASS
                                    </span>
                                </div>

                                {{-- Event Pass Body --}}
                                <div class="rounded-xl bg-gradient-to-br from-white/10 to-white/[0.02] border border-white/15 p-5 relative overflow-hidden mb-4">
                                    <div class="absolute top-2 right-2 text-[9px] font-mono text-gray-400">VIP ACCESS #TM-992</div>
                                    <div class="text-xs font-mono text-[#e8788a] uppercase tracking-wider mb-1">MONARCHI GLOBAL SUMMIT</div>
                                    <div class="text-lg font-bold text-white mb-3">All-Access Arena Pass</div>

                                    {{-- Dynamic QR & Barcode Simulation with Laser Line --}}
                                    <div class="relative p-3 rounded-lg bg-black/70 border border-white/10 flex flex-col items-center justify-center gap-2 overflow-hidden">
                                        <div class="absolute inset-x-0 h-0.5 bg-[#e8788a] shadow-[0_0_12px_#9c051d] animate-pulse"></div>

                                        {{-- Simulated Barcode Lines --}}
                                        <div class="flex items-center justify-center gap-1 w-full h-8 px-2 opacity-80">
                                            <span class="w-1 h-full bg-white"></span>
                                            <span class="w-0.5 h-full bg-white"></span>
                                            <span class="w-2 h-full bg-white"></span>
                                            <span class="w-1 h-full bg-white"></span>
                                            <span class="w-0.5 h-full bg-white"></span>
                                            <span class="w-1.5 h-full bg-white"></span>
                                            <span class="w-0.5 h-full bg-white"></span>
                                            <span class="w-2 h-full bg-white"></span>
                                            <span class="w-1 h-full bg-white"></span>
                                            <span class="w-0.5 h-full bg-white"></span>
                                            <span class="w-2 h-full bg-white"></span>
                                            <span class="w-1 h-full bg-white"></span>
                                        </div>
                                        <span class="text-[9px] font-mono text-gray-400 tracking-[0.2em]">QR / BARCODE TOKEN: 884-9102-441</span>
                                    </div>
                                </div>

                                {{-- Gate Scan Flow Breakdown --}}
                                <div class="space-y-2 text-xs">
                                    <div class="flex items-center justify-between p-2.5 rounded-lg bg-white/[0.03] border border-white/5">
                                        <span class="text-gray-400 flex items-center gap-2">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> 1st Entry:
                                        </span>
                                        <span class="text-gray-200 font-mono text-[11px]">QR Scan + FaceID Captured (0.3s)</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 rounded-lg bg-[#9c051d]/10 border border-[#9c051d]/30">
                                        <span class="text-white flex items-center gap-2 font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#9c051d]"></span> Re-Entry:
                                        </span>
                                        <span class="text-[#e8788a] font-mono text-[11px] font-semibold">100% Biometric (Zero Wristbands)</span>
                                    </div>
                                </div>

                                {{-- Hardware Telemetry --}}
                                <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Gate Turnstile #04</span>
                                    <span class="text-emerald-400">● 1,420 Verified Entries</span>
                                </div>
                            </div>
                        </div>

                        {{-- Right Column: Core Narrative & Features (7 cols) --}}
                        <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
                            {{-- Product Meta Badge --}}
                            <div class="flex items-center gap-3 flex-wrap">
                                <span class="px-3.5 py-1 rounded-full text-[11px] font-mono tracking-wider uppercase font-semibold bg-[#9c051d]/20 text-[#e8788a] border border-[#9c051d]/40">
                                    Product 02 // Event Operations &amp; Biometrics
                                </span>
                                <span class="flex items-center gap-1.5 text-[11px] text-emerald-400 font-mono tracking-wide">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    Turnstile Terminals Ready
                                </span>
                            </div>

                            {{-- Product Title & Headline --}}
                            <div>
                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-2 flex items-center gap-3">
                                    ticketMan
                                    <span class="text-xs px-2.5 py-1 rounded-full bg-white/10 text-gray-300 font-mono font-normal">
                                        Turnkey Hardware + Software
                                    </span>
                                </h3>
                                <p class="text-lg sm:text-xl font-normal text-gray-300">
                                    Event Ticketing &amp; Biometric Gate Access Management System
                                </p>
                            </div>

                            {{-- Deep Narrative --}}
                            <p class="text-sm sm:text-base text-gray-400 leading-relaxed font-light">
                                ticketMan is an end-to-end event ticketing and gate intelligence ecosystem. We do not just process ticket sales: we build and deploy custom fingerprint and FaceID verification hardware terminals at venue entrances and train your entire operations team on how to grant friction-free, fraud-proof access. Attendees never need printed tickets—a secure digital QR code or barcode is issued directly to their device. When scanned at the entrance gate, the attendee’s biometrics are captured instantaneously. From then on, their face or fingerprint serves as their access pass whenever they step outside and re-enter, completely eliminating paper tickets, ticket resale, and physical event wristbands.
                            </p>

                            {{-- Capability Badges --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Digital QR &amp; Barcode Entry</div>
                                        <div class="text-gray-400 font-light">Instant digital delivery, zero paper required</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Gate Biometric Capture</div>
                                        <div class="text-gray-400 font-light">Attendee fingerprint &amp; FaceID registered at gate</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Zero Wristband Re-Entry</div>
                                        <div class="text-gray-400 font-light">Sub-second biometric check for coming and going</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Staff &amp; Security Training</div>
                                        <div class="text-gray-400 font-light">On-site technical training for your venue staff</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Action Buttons --}}
                            <div class="flex items-center gap-4 pt-4 flex-wrap">
                                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-xs sm:text-sm font-semibold uppercase tracking-wider transition-all duration-300 hover:scale-105 shadow-[0_0_25px_rgba(156,5,29,0.4)]">
                                    <span>Deploy ticketMan for Your Event</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <a href="/store" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/5 hover:bg-white/10 text-gray-200 border border-white/15 text-xs sm:text-sm font-medium transition-all duration-200 hover:scale-105">
                                    <span>Hardware Specs</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- =========================================
                     PRODUCT 3: roofMe (Real Estate Management)
                ========================================= --}}
                <div class="product-card-3d group relative rounded-[32px] p-8 sm:p-10 lg:p-14 border border-white/10 overflow-hidden transition-all duration-500 hover:border-white/25 shadow-2xl reveal"
                     style="background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%), #05050a;"
                     data-product="roofme">

                    {{-- Specular cursor glare layer --}}
                    <div class="glare-effect absolute inset-0 pointer-events-none transition-opacity duration-300 opacity-0 z-0"></div>

                    {{-- Card Grid: Description & Visual Terminal --}}
                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                        {{-- Left Column: Core Narrative & Features (7 cols) --}}
                        <div class="lg:col-span-7 space-y-6">
                            {{-- Product Meta Badge --}}
                            <div class="flex items-center gap-3 flex-wrap">
                                <span class="px-3.5 py-1 rounded-full text-[11px] font-mono tracking-wider uppercase font-semibold bg-[#9c051d]/20 text-[#e8788a] border border-[#9c051d]/40">
                                    Product 03 // Real Estate &amp; Hospitality
                                </span>
                                <span class="flex items-center gap-1.5 text-[11px] text-emerald-400 font-mono tracking-wide">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    Integrated Payments Active
                                </span>
                            </div>

                            {{-- Product Title & Headline --}}
                            <div>
                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-2 flex items-center gap-3">
                                    roofMe
                                    <span class="text-xs px-2.5 py-1 rounded-full bg-white/10 text-gray-300 font-mono font-normal">
                                        Multi-Platform Ecosystem
                                    </span>
                                </h3>
                                <p class="text-lg sm:text-xl font-normal text-gray-300">
                                    Property &amp; Hospitality Management System with Integrated Rent Collection
                                </p>
                            </div>

                            {{-- Deep Narrative --}}
                            <p class="text-sm sm:text-base text-gray-400 leading-relaxed font-light">
                                roofMe is a modern real estate and hospitality operating system designed specifically for guest houses, boutique apartments, residential buildings, hotels, and motels. Featuring integrated digital rent and reservation payment gateways, roofMe connects property operators and residents seamlessly: owners and managers operate from a powerful desktop and tablet application to monitor occupancy rates, track cash collections, and manage lease agreements; while tenants and guests utilize a lightweight mobile application to pay rent, view lease terms, and submit maintenance tickets in real time.
                            </p>

                            {{-- Capability Badges --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Integrated Rent Payments</div>
                                        <div class="text-gray-400 font-light">Native card, bank transfer, and mobile money payouts</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Desktop &amp; Tablet Console</div>
                                        <div class="text-gray-400 font-light">Live occupancy analytics &amp; financial ledger for owners</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Tenant &amp; Guest Mobile App</div>
                                        <div class="text-gray-400 font-light">One-tap rent payments, digital lease, &amp; service requests</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-6 h-6 rounded-lg bg-[#9c051d]/20 text-[#e8788a] flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                        ✓
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-medium">Multi-Asset Adaptability</div>
                                        <div class="text-gray-400 font-light">Guest houses, apartments, boutique hotels, &amp; motels</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Action Buttons --}}
                            <div class="flex items-center gap-4 pt-4 flex-wrap">
                                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-xs sm:text-sm font-semibold uppercase tracking-wider transition-all duration-300 hover:scale-105 shadow-[0_0_25px_rgba(156,5,29,0.4)]">
                                    <span>Get roofMe for Your Properties</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <a href="/services" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/5 hover:bg-white/10 text-gray-200 border border-white/15 text-xs sm:text-sm font-medium transition-all duration-200 hover:scale-105">
                                    <span>Explore Ecosystem</span>
                                </a>
                            </div>
                        </div>

                        {{-- Right Column: Interactive Dual Device Visual (Desktop Console + Mobile App) (5 cols) --}}
                        <div class="lg:col-span-5 relative">
                            <div class="relative rounded-2xl border border-white/10 bg-black/60 backdrop-blur-xl p-6 sm:p-7 shadow-[0_20px_50px_rgba(0,0,0,0.8)] overflow-hidden space-y-4">
                                {{-- Header --}}
                                <div class="flex items-center justify-between pb-3 border-b border-white/10">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded-full bg-[#9c051d]"></span>
                                        <span class="text-xs font-mono text-white tracking-widest uppercase">roofMe ECOSYSTEM</span>
                                    </div>
                                    <span class="text-[10px] font-mono text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/30">
                                        PAYMENTS INTEGRATED
                                    </span>
                                </div>

                                {{-- Manager Tablet Console Preview --}}
                                <div class="rounded-xl bg-white/[0.04] border border-white/10 p-4">
                                    <div class="flex items-center justify-between text-xs mb-3">
                                        <span class="text-gray-300 font-mono font-medium flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#e8788a]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                            Owner / Manager Console (Tablet &amp; Desktop)
                                        </span>
                                        <span class="text-[10px] font-mono text-emerald-400">96.4% Occupied</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2 text-center font-mono">
                                        <div class="p-2 rounded-lg bg-black/50 border border-white/5">
                                            <div class="text-gray-400 text-[9px] uppercase">Active Units</div>
                                            <div class="text-white font-bold text-sm">48 / 50</div>
                                        </div>
                                        <div class="p-2 rounded-lg bg-black/50 border border-white/5">
                                            <div class="text-gray-400 text-[9px] uppercase">Collected</div>
                                            <div class="text-emerald-400 font-bold text-sm">$42,800</div>
                                        </div>
                                        <div class="p-2 rounded-lg bg-black/50 border border-white/5">
                                            <div class="text-gray-400 text-[9px] uppercase">Pending</div>
                                            <div class="text-amber-400 font-bold text-sm">$1,200</div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Tenant Mobile App Preview --}}
                                <div class="rounded-xl bg-gradient-to-r from-[#9c051d]/15 to-white/[0.03] border border-[#9c051d]/30 p-4">
                                    <div class="flex items-center justify-between text-xs mb-2">
                                        <span class="text-white font-mono font-medium flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                            Tenant Mobile App
                                        </span>
                                        <span class="text-[10px] font-mono text-[#e8788a]">Apt 4B // Luxury Suite</span>
                                    </div>
                                    <div class="p-3 rounded-lg bg-black/70 border border-white/10 flex items-center justify-between">
                                        <div>
                                            <div class="text-[10px] text-gray-400">Monthly Rent Due:</div>
                                            <div class="text-white font-mono font-bold text-sm">$1,450.00</div>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#9c051d] text-white text-[11px] font-medium shadow-md">
                                            <span>Pay Now</span>
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                        </div>
                                    </div>
                                </div>

                                {{-- Property Types Supported --}}
                                <div class="flex items-center justify-between text-[11px] text-gray-400 pt-1 font-mono">
                                    <span class="flex items-center gap-1">🏢 Guest Houses</span>
                                    <span class="flex items-center gap-1">🏙️ Apartments</span>
                                    <span class="flex items-center gap-1">🏨 Hotels &amp; Motels</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =============================================
         SERVICES SECTION — COMPACT SCROLL-DRIVEN INFINITE CAROUSEL
         Converted underneath products (~1/3 original card size)
         Seamless infinite loop that moves forward/backward with scroll velocity
    ============================================= --}}
    <section class="services-carousel-section py-20 px-4 sm:px-6 lg:px-8 relative z-10 border-t border-b overflow-hidden"
             style="border-color: var(--border-color); background: var(--bg-section);">

        <div class="max-w-[1240px] mx-auto mb-10 reveal">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 text-[10px] font-mono tracking-widest uppercase text-[#e8788a] mb-3">
                        <span>Capabilities &amp; Engineering</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-semibold tracking-tight" style="color: var(--text-primary);">
                        Our Specialized Services
                    </h3>
                </div>
                <div class="flex items-center gap-3">
                    <p class="text-xs sm:text-sm text-gray-400 max-w-xs font-light hidden sm:block">
                        Continuously drifting. Responds dynamically as you scroll up or down.
                    </p>
                    <div class="flex items-center gap-2">
                        <button id="services-prev-btn" class="w-9 h-9 rounded-full border border-white/15 bg-white/5 hover:bg-white/15 text-white flex items-center justify-center transition active:scale-95" aria-label="Slide Backward">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button id="services-next-btn" class="w-9 h-9 rounded-full border border-white/15 bg-white/5 hover:bg-white/15 text-white flex items-center justify-center transition active:scale-95" aria-label="Slide Forward">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Infinite Marquee Carousel Track (Cards repeated twice for seamless loop) --}}
        <div id="services-carousel-wrapper" class="relative w-full overflow-hidden cursor-grab active:cursor-grabbing select-none py-2">
            {{-- Gradient edge masks for high-end look --}}
            <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-r from-[var(--bg-section)] to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-l from-[var(--bg-section)] to-transparent z-10 pointer-events-none"></div>

            <div id="services-carousel-track" class="flex gap-6 w-max will-change-transform">

                {{-- SET 1 of 6 Service Cards --}}
                {{-- Service 1: SaaS --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-saas.jpg') }}" alt="SaaS Platforms" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 01</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">SaaS Platforms</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Software. Built for enterprise scale and multi-tenant cloud operations.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2: Workflow Automation --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-workflow.jpg') }}" alt="Workflow Automation" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 02</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Workflow Automation</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Automate. Optimize. Intelligent AI systems connected to your pipelines.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/contact" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Inquire</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 3: Software Development --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-softwaredev.jpg') }}" alt="Software Development" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 03</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Software Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Build. Deploy. Scale. Mission-critical bespoke backends and cloud services.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 4: Web Development --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-webdev.jpg') }}" alt="Web Development" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 04</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Web Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Identity. Performance. High-impact reactive web interfaces engineered to convert.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 5: Integrated Systems --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-integrated-systems.jpg') }}" alt="Integrated Systems" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 05</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Integrated Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Engineered as one. Hardware telemetry and edge systems built for the world.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 6: Security Systems --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-security-systems.jpg') }}" alt="Security Systems" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 06</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Security Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Intelligent. Connected. Secure. Cyber defense and access perimeter hardening.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SET 2 (Exact Duplicate for Infinite Continuous Loop) --}}
                {{-- Service 1 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-saas.jpg') }}" alt="" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 01</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">SaaS Platforms</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Software. Built for enterprise scale and multi-tenant cloud operations.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-workflow.jpg') }}" alt="" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 02</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Workflow Automation</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Automate. Optimize. Intelligent AI systems connected to your pipelines.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/contact" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Inquire</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 3 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-softwaredev.jpg') }}" alt="" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 03</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Software Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Build. Deploy. Scale. Mission-critical bespoke backends and cloud services.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 4 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-webdev.jpg') }}" alt="" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 04</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Web Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Identity. Performance. High-impact reactive web interfaces engineered to convert.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 5 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-integrated-systems.jpg') }}" alt="" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 05</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Integrated Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Engineered as one. Hardware telemetry and edge systems built for the world.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 6 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-security-systems.jpg') }}" alt="" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/30"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-between">
                        <span class="text-[10px] font-mono tracking-widest text-[#e8788a] uppercase bg-[#9c051d]/30 border border-[#9c051d]/40 px-2 py-0.5 rounded w-max">Service 06</span>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Security Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Intelligent. Connected. Secure. Cyber defense and access perimeter hardening.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#9c051d] hover:bg-[#7a0417] text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Interactive Glyph Canvas & GSAP Motion Scripts --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            /* ============================================================
               1. INTERACTIVE GLYPH PARTICLES CANVAS
               (Globes, NY Skyscrapers, Verified Checkmarks, Houses, Biometrics)
               Reacts to mouse pointer, floating motion, connects lines
            ============================================================ */
            (function initGlyphCanvas() {
                const canvas = document.getElementById('monarch-glyph-canvas');
                const section = document.getElementById('products-section');
                if (!canvas || !section) return;

                const ctx = canvas.getContext('2d');
                let width = (canvas.width = section.offsetWidth);
                let height = (canvas.height = section.offsetHeight);

                const mouse = {
                    x: -9999,
                    y: -9999,
                    radius: 200,
                    isActive: false
                };

                // Track mouse relative to products section
                section.addEventListener('mousemove', (e) => {
                    const rect = section.getBoundingClientRect();
                    mouse.x = e.clientX - rect.left;
                    mouse.y = e.clientY - rect.top;
                    mouse.isActive = true;
                });

                section.addEventListener('mouseleave', () => {
                    mouse.x = -9999;
                    mouse.y = -9999;
                    mouse.isActive = false;
                });

                window.addEventListener('resize', () => {
                    width = canvas.width = section.offsetWidth;
                    height = canvas.height = section.offsetHeight;
                });

                // Glyph Types
                const GLYPH_TYPES = ['globe', 'skyscraper', 'verified', 'biometric', 'house'];

                // Create Particle Objects
                const particleCount = Math.min(Math.floor(width / 32), 48);
                const particles = [];

                for (let i = 0; i < particleCount; i++) {
                    particles.push({
                        x: Math.random() * width,
                        y: Math.random() * height,
                        vx: (Math.random() - 0.5) * 0.45,
                        vy: (Math.random() - 0.5) * 0.45,
                        size: 14 + Math.random() * 12,
                        type: GLYPH_TYPES[i % GLYPH_TYPES.length],
                        rotation: Math.random() * Math.PI * 2,
                        vRot: (Math.random() - 0.5) * 0.008,
                        baseAlpha: 0.18 + Math.random() * 0.28,
                        alpha: 0.25,
                        scale: 1
                    });
                }

                // Render vector glyphs with crisp canvas paths
                function drawGlyph(p) {
                    ctx.save();
                    ctx.translate(p.x, p.y);
                    ctx.rotate(p.rotation);
                    ctx.scale(p.scale, p.scale);
                    ctx.strokeStyle = `rgba(255, 255, 255, ${p.alpha})`;
                    ctx.fillStyle = `rgba(156, 5, 29, ${p.alpha * 0.2})`;
                    ctx.lineWidth = 1.1;

                    const s = p.size;

                    switch (p.type) {
                        case 'globe':
                            // Outer circle
                            ctx.beginPath();
                            ctx.arc(0, 0, s / 2, 0, Math.PI * 2);
                            ctx.stroke();
                            // Equator & meridian
                            ctx.beginPath();
                            ctx.ellipse(0, 0, s / 2, s / 4.5, 0, 0, Math.PI * 2);
                            ctx.stroke();
                            ctx.beginPath();
                            ctx.ellipse(0, 0, s / 4.5, s / 2, 0, 0, Math.PI * 2);
                            ctx.stroke();
                            // Dot node
                            ctx.fillStyle = `rgba(232, 120, 138, ${p.alpha})`;
                            ctx.beginPath();
                            ctx.arc(s / 4, -s / 6, 1.5, 0, Math.PI * 2);
                            ctx.fill();
                            break;

                        case 'skyscraper':
                            // Tall New York style building with spire
                            const w = s * 0.45;
                            const h = s * 0.9;
                            // Main tower
                            ctx.strokeRect(-w / 2, -h / 2 + s * 0.2, w, h - s * 0.2);
                            // Stepped top
                            ctx.strokeRect(-w / 3, -h / 2 + s * 0.08, (w * 2) / 3, s * 0.14);
                            // Spire
                            ctx.beginPath();
                            ctx.moveTo(0, -h / 2 + s * 0.08);
                            ctx.lineTo(0, -h / 2 - s * 0.18);
                            ctx.stroke();
                            // Window grid lines
                            ctx.beginPath();
                            ctx.moveTo(-w / 4, 0);
                            ctx.lineTo(w / 4, 0);
                            ctx.moveTo(-w / 4, s * 0.18);
                            ctx.lineTo(w / 4, s * 0.18);
                            ctx.stroke();
                            break;

                        case 'verified':
                            // Shield outline with checkmark
                            ctx.beginPath();
                            ctx.moveTo(0, -s * 0.5);
                            ctx.lineTo(s * 0.42, -s * 0.3);
                            ctx.lineTo(s * 0.38, s * 0.15);
                            ctx.quadraticCurveTo(0, s * 0.55, 0, s * 0.55);
                            ctx.quadraticCurveTo(-s * 0.38, s * 0.15, -s * 0.38, s * 0.15);
                            ctx.lineTo(-s * 0.42, -s * 0.3);
                            ctx.closePath();
                            ctx.strokeStyle = `rgba(232, 120, 138, ${p.alpha * 1.3})`;
                            ctx.stroke();
                            // Checkmark
                            ctx.beginPath();
                            ctx.moveTo(-s * 0.18, 0);
                            ctx.lineTo(-s * 0.04, s * 0.16);
                            ctx.lineTo(s * 0.2, -s * 0.14);
                            ctx.strokeStyle = `rgba(255, 255, 255, ${p.alpha * 1.5})`;
                            ctx.stroke();
                            break;

                        case 'biometric':
                            // Concentric fingerprint / FaceID sensor arcs
                            ctx.beginPath();
                            ctx.arc(0, 0, s * 0.45, -Math.PI * 0.8, Math.PI * 0.2);
                            ctx.stroke();
                            ctx.beginPath();
                            ctx.arc(0, 0, s * 0.32, -Math.PI * 0.5, Math.PI * 0.5);
                            ctx.stroke();
                            ctx.beginPath();
                            ctx.arc(0, 0, s * 0.18, -Math.PI * 0.7, Math.PI * 0.3);
                            ctx.stroke();
                            // Target crosshair
                            ctx.fillStyle = `rgba(232, 120, 138, ${p.alpha * 1.2})`;
                            ctx.fillRect(-1, -s * 0.52, 2, 4);
                            ctx.fillRect(-1, s * 0.42, 2, 4);
                            break;

                        case 'house':
                            // Geometric architectural house
                            const hw = s * 0.5;
                            const hh = s * 0.4;
                            // Roof triangle
                            ctx.beginPath();
                            ctx.moveTo(-hw, 0);
                            ctx.lineTo(0, -hh * 1.2);
                            ctx.lineTo(hw, 0);
                            ctx.closePath();
                            ctx.stroke();
                            // Walls
                            ctx.strokeRect(-hw * 0.85, 0, hw * 1.7, hh);
                            // Door
                            ctx.strokeRect(-hw * 0.25, hh * 0.35, hw * 0.5, hh * 0.65);
                            break;
                    }

                    ctx.restore();
                }

                // Animation Frame Loop
                function animateCanvas() {
                    ctx.clearRect(0, 0, width, height);

                    // Draw subtle interactive cursor halo if active
                    if (mouse.isActive && mouse.x > 0 && mouse.y > 0) {
                        const grad = ctx.createRadialGradient(mouse.x, mouse.y, 0, mouse.x, mouse.y, 220);
                        grad.addColorStop(0, 'rgba(156, 5, 29, 0.08)');
                        grad.addColorStop(0.5, 'rgba(255, 255, 255, 0.02)');
                        grad.addColorStop(1, 'transparent');
                        ctx.fillStyle = grad;
                        ctx.beginPath();
                        ctx.arc(mouse.x, mouse.y, 220, 0, Math.PI * 2);
                        ctx.fill();
                    }

                    // Update & Draw Particles
                    for (let i = 0; i < particles.length; i++) {
                        const p = particles[i];

                        // Mouse proximity physics
                        let dx = p.x - mouse.x;
                        let dy = p.y - mouse.y;
                        let dist = Math.sqrt(dx * dx + dy * dy);

                        if (mouse.isActive && dist < mouse.radius && dist > 1) {
                            // Gentle repulsion wave
                            const force = (mouse.radius - dist) / mouse.radius;
                            const angle = Math.atan2(dy, dx);
                            p.vx += Math.cos(angle) * force * 0.45;
                            p.vy += Math.sin(angle) * force * 0.45;
                            // Boost brightness and scale slightly when mouse is close
                            p.alpha = Math.min(p.baseAlpha * 2.2, 0.9);
                            p.scale = 1 + force * 0.25;
                        } else {
                            p.alpha += (p.baseAlpha - p.alpha) * 0.05;
                            p.scale += (1 - p.scale) * 0.05;
                        }

                        // Apply damping to velocities
                        p.vx *= 0.96;
                        p.vy *= 0.96;

                        // Position update with ambient drift
                        p.x += p.vx;
                        p.y += p.vy;
                        p.rotation += p.vRot;

                        // Wrap edges smoothly
                        if (p.x < -40) p.x = width + 40;
                        if (p.x > width + 40) p.x = -40;
                        if (p.y < -40) p.y = height + 40;
                        if (p.y > height + 40) p.y = -40;

                        // Connect lines to nearby neighbors
                        for (let j = i + 1; j < particles.length; j++) {
                            const p2 = particles[j];
                            const ndx = p.x - p2.x;
                            const ndy = p.y - p2.y;
                            const nDist = Math.sqrt(ndx * ndx + ndy * ndy);

                            if (nDist < 95) {
                                const lineAlpha = (1 - nDist / 95) * 0.12 * Math.min(p.alpha, p2.alpha);
                                ctx.strokeStyle = `rgba(255, 255, 255, ${lineAlpha})`;
                                ctx.beginPath();
                                ctx.moveTo(p.x, p.y);
                                ctx.lineTo(p2.x, p2.y);
                                ctx.stroke();
                            }
                        }

                        drawGlyph(p);
                    }

                    requestAnimationFrame(animateCanvas);
                }

                animateCanvas();
            })();

            /* ============================================================
               2. 3D CARD PERSPECTIVE TILT & CURSOR GLARE ON PRODUCT CARDS
            ============================================================ */
            (function initProductCardTilt() {
                const cards = document.querySelectorAll('.product-card-3d');
                cards.forEach(card => {
                    const glare = card.querySelector('.glare-effect');

                    card.addEventListener('mousemove', (e) => {
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;

                        // Calculate subtle tilt (max 4.5 degrees)
                        const rotateX = ((y - centerY) / centerY) * -4.5;
                        const rotateY = ((x - centerX) / centerX) * 4.5;

                        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.008, 1.008, 1.008)`;

                        if (glare) {
                            glare.style.background = `radial-gradient(circle 350px at ${x}px ${y}px, rgba(255,255,255,0.08), transparent 70%)`;
                            glare.style.opacity = '1';
                        }
                    });

                    card.addEventListener('mouseleave', () => {
                        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
                        if (glare) glare.style.opacity = '0';
                    });
                });
            })();

            /* ============================================================
               3. SERVICES INFINITE CAROUSEL WITH SCROLL-VELOCITY DRIVER
               Moves forward / backward depending on page scroll velocity.
               Never ends (seamless 50% translation loop).
            ============================================================ */
            (function initServicesCarousel() {
                const wrapper = document.getElementById('services-carousel-wrapper');
                const track = document.getElementById('services-carousel-track');
                const prevBtn = document.getElementById('services-prev-btn');
                const nextBtn = document.getElementById('services-next-btn');

                if (!wrapper || !track) return;

                let currentX = 0;
                let baseDrift = -0.55; // Natural forward drift (pixels/frame)
                let scrollVelocity = 0;
                let lastScrollY = window.scrollY;
                let isHovered = false;
                let isDragging = false;
                let startX = 0;
                let dragDistance = 0;

                // Track window scroll delta to drive carousel forward/backward
                window.addEventListener('scroll', () => {
                    const delta = window.scrollY - lastScrollY;
                    lastScrollY = window.scrollY;
                    // Scrolling down (delta > 0) accelerates forward (negative X)
                    // Scrolling up (delta < 0) reverses and drives backward (positive X)
                    scrollVelocity = -delta * 0.95;
                }, { passive: true });

                wrapper.addEventListener('mouseenter', () => { isHovered = true; });
                wrapper.addEventListener('mouseleave', () => { isHovered = false; isDragging = false; });

                // Pointer / Touch Drag support
                wrapper.addEventListener('pointerdown', (e) => {
                    isDragging = true;
                    startX = e.clientX;
                    dragDistance = 0;
                });

                window.addEventListener('pointermove', (e) => {
                    if (!isDragging) return;
                    const diff = e.clientX - startX;
                    startX = e.clientX;
                    dragDistance += Math.abs(diff);
                    currentX += diff;
                });

                window.addEventListener('pointerup', () => {
                    isDragging = false;
                });

                // Prevent links opening if user was dragging
                wrapper.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', (e) => {
                        if (dragDistance > 6) e.preventDefault();
                    });
                });

                // Arrow Buttons
                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        currentX += 360;
                    });
                }
                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        currentX -= 360;
                    });
                }

                // Animation Frame Loop
                function tickCarousel() {
                    const halfWidth = track.scrollWidth / 2;

                    if (!isDragging && halfWidth > 0) {
                        // Blend natural drift with decay of scroll velocity
                        let speed = (isHovered ? baseDrift * 0.2 : baseDrift) + scrollVelocity;
                        currentX += speed;
                        scrollVelocity *= 0.92; // Smooth deceleration

                        // Infinite Wrap: seamlessly wrap around halfWidth
                        if (currentX <= -halfWidth) {
                            currentX += halfWidth;
                        } else if (currentX >= 0) {
                            currentX -= halfWidth;
                        }
                    }

                    track.style.transform = `translate3d(${currentX}px, 0, 0)`;
                    requestAnimationFrame(tickCarousel);
                }

                // Start loop once styles/layout are ready
                requestAnimationFrame(tickCarousel);
            })();

            /* ============================================================
               4. GSAP & SCROLLTRIGGER REVEALS FOR CARDS & TERMINALS
            ============================================================ */
            (function initGSAPAnimations() {
                if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

                gsap.registerPlugin(ScrollTrigger);

                // Animate each product card as it enters the viewport
                gsap.utils.toArray('.product-card-3d').forEach((card, index) => {
                    gsap.fromTo(card,
                        {
                            opacity: 0,
                            y: 60,
                            scale: 0.97
                        },
                        {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            duration: 0.9,
                            ease: 'power3.out',
                            scrollTrigger: {
                                trigger: card,
                                start: 'top 85%',
                                toggleActions: 'play none none none'
                            }
                        }
                    );
                });
            })();
        });
    </script>

    {{-- =============================================
         MAI AI SECTION
    ============================================= --}}
    <section class="mai-section relative overflow-hidden z-10 my-8" style="background: #050510;">
        <img src="{{ asset('images/mai-bg.jpg') }}"
            loading="lazy"
            decoding="async"
            class="absolute inset-0 w-full h-full object-cover opacity-20 filter blur-sm">
        <div class="absolute inset-0 bg-black/80"></div>

        <div class="relative px-6 flex flex-col md:flex-row items-center gap-16 max-w-[1200px] mx-auto py-24">

            <div class="md:w-1/2 reveal-left pl-6">
                <h2 class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-3">Monarch AI - MAI</h2>
                <h3 class="text-3xl md:text-5xl font-semibold tracking-tight text-white mb-6">
                    Monarch Intelligence <br> AI that knows you.
                </h3>
                <p class="text-gray-400 font-normal leading-relaxed mb-8">
                    An intelligent engine that understands your entire workflow. This isn't just a chatbot—it's your COMPANION, capable of understanding complex queries, summarizing business data, and executing tasks
                    with efficiency and speed.
                </p>
                <ul class="space-y-4 text-sm text-gray-300 font-light">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Get analysis from your business's data in real-time.
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Generate tailored email for clients and stakeholders.
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Get intelligent advice tailored to you.
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Automate repetitive business tasks effortlessly.
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#9c051d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Provide Financial Forecasts with backed business data.
                    </li>
                </ul>
            </div>

            <div class="md:w-1/2 w-full reveal-right pr-6 delay-200">
                <div class="glass p-2 rounded-2xl border border-gray-800 shadow-2xl relative bg-black/50">
                    <div class="flex items-center gap-2 px-4 py-3 border-b border-white/5">
                        <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
                        <div class="ml-4 text-[10px] text-gray-500 font-mono">Mai ~</div>
                    </div>
                    <div class="p-6 space-y-6 text-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-[#9c051d]/20 flex items-center justify-center shrink-0">
                                You</div>
                            <div class="glass px-4 py-2 rounded-lg rounded-tl-none text-gray-200 border-none">Compare this quarters revenue to last years and make a forecast based on current market conditions.</div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div
                                class="bg-gray-900 border border-white/10 px-4 py-3 rounded-lg rounded-tl-none text-gray-300 font-light w-full">
                                <p class="mb-2">Per the data, the company has made a total of $87,899 compared to last years quarter revenue of $65,345 which signifies a percentage increase of ...</p>
                                <span class="text-[10px] text-[#9c051d] font-mono">✔ Generated in 1.2s</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         CTA SECTION — Always dark
    ============================================= --}}
    <section class="cta-section relative py-24 px-6 overflow-hidden border-t z-0"
             style="background: #020208; border-color: rgba(255,255,255,0.05);">

        <div id="random-cards-container" class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            @for ($i = 0; $i < 20; $i++) <div
                class="glass-card absolute rounded-2xl transition-all duration-1000 ease-out z-0">
        </div>
        @endfor
        </div>

        <div class="relative max-w-7xl mx-auto text-center z-10 reveal">
            <h2 class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-3">Start Today</h2>
            <h3 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white mb-8">Bring enterprise AI<br>
                into your workflow.</h3>
            <p class="text-lg text-gray-400 font-light leading-relaxed max-w-3xl mx-auto mb-12">
                Scale smarter with MonarchI. Automate business processes, surface predictive insights, and unlock
                actionable intelligence across your operations with AI built for your growth.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('login') }}"
                    class="inline-block bg-[#9c051d] hover:bg-[#7a0417] text-white font-bold py-4 px-10 rounded-full transition transform hover:scale-105 text-lg">
                    Get Started
                </a>
                <a href="#demo"
                    class="inline-block glass px-10 py-4 rounded-full text-white font-medium hover:bg-white/10 transition text-lg">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    {{-- =============================================}}
         CASE STUDIES SECTION
    {{-- =============================================
         UNIFIED DUAL-TRACK CAROUSEL
         Case Studies + Past Projects scroll in sync.
         Single centered controls at the bottom (Apple-style).
    ============================================= --}}
    <section class="unified-carousel-section py-16" id="unified-carousel" style="background: var(--bg-primary); overflow: hidden;">
        <div class="max-w-[1200px] mx-auto px-6 mb-10 reveal">
            {{-- Two labels side by side --}}
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-1 md:gap-0">
                <div>
                    <p class="text-xs font-semibold tracking-[0.2em] text-[#9c051d] uppercase mb-1">Case Studies &amp; Projects</p>
                    <h2 class="text-3xl md:text-4xl font-semibold tracking-tight leading-tight" style="color: var(--text-primary);">
                        Research, Insights &amp;<br class="hidden md:block"> Work We're Proud Of.
                    </h2>
                </div>
                <p class="text-sm max-w-xs leading-relaxed mt-3 md:mt-0" style="color: var(--text-secondary);">
                    Swipe or use the arrows to explore. Both tracks move together.
                </p>
            </div>
        </div>

        {{-- ── Track 1: Case Studies ── --}}
        <div class="flex gap-6 overflow-x-auto hide-scroll snap-x snap-mandatory px-6 w-full pb-3" id="cs-track">

            {{-- Case Study 1: BoG --}}
            <div class="snap-item shrink-0 w-[85vw] md:w-[50vw] h-[280px] md:h-[300px] relative rounded-3xl overflow-hidden group">
                <img src="{{asset('images/BoG.webp')}}"
                    class="absolute inset-0 w-full h-3/4 object-cover opacity-60 transition duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 z-10 max-w-lg">
                    <span class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-2 block">FinTech Sector - Ghana</span>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-2">National Payment Systems Strategy</h3>
                    <p class="text-gray-300 mb-4 font-light text-sm leading-relaxed">The Bank of Ghana's strategy mandates telecoms and fintechs to upgrade security infrastructure and institute automated monitoring systems.</p>
                    <a class="bg-white text-black px-5 py-1.5 rounded-full font-medium hover:bg-gray-200 transition text-sm"
                       href="https://www.bog.gov.gh/wp-content/uploads/2026/02/NATIONAL-PAYMENT-SYSTEMS-STRATEGY-2025-2029.pdf">Read Case Study</a>
                </div>
            </div>

            {{-- Case Study 2: AI Health --}}
            <div class="snap-item shrink-0 w-[85vw] md:w-[50vw] h-[280px] md:h-[300px] relative rounded-3xl overflow-hidden group">
                <img src="{{asset('images/37Hospital.jpg')}}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 transition duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 z-10 max-w-lg">
                    <span class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-2 block">HealthTech - Ghana</span>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-2">AI-Driven Health Programme</h3>
                    <p class="text-gray-300 mb-4 font-light text-sm leading-relaxed">Ghana launched an AI-driven health programme with WHO and UNDP, deploying early warning systems for climate-sensitive diseases.</p>
                    <a class="bg-white text-black px-5 py-1.5 rounded-full font-medium hover:bg-gray-200 transition text-sm"
                       href="https://www.afro.who.int/countries/ghana/news/ghana-launches-artificial-intelligence-driven-health-programme-strengthen-systems-and-safeguard">Read Case Study</a>
                </div>
            </div>

            {{-- Case Study 3: Africa Fintech AI Credit Scoring --}}
            <div class="snap-item shrink-0 w-[85vw] md:w-[50vw] h-[280px] md:h-[300px] relative rounded-3xl overflow-hidden group">
                <img src="{{ asset('images/case-fintech.jpg') }}"
                    alt="Africa Fintech AI"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 transition duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 z-10 max-w-lg">
                    <span class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-2 block">FinTech - West Africa</span>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-2">AI Credit Scoring for Unbanked SMEs</h3>
                    <p class="text-gray-300 mb-4 font-light text-sm leading-relaxed">AI engines analysing mobile-money patterns issue instant micro-loans to SMEs — reducing approval time from weeks to minutes.</p>
                    <a class="bg-white text-black px-5 py-1.5 rounded-full font-medium hover:bg-gray-200 transition text-sm"
                       href="https://getcarbon.co" target="_blank" rel="noopener noreferrer">Read Case Study</a>
                </div>
            </div>

            {{-- Case Study 4: GhanaPostGPS --}}
            <div class="snap-item shrink-0 w-[85vw] md:w-[50vw] h-[280px] md:h-[300px] relative rounded-3xl overflow-hidden group">
                <img src="{{ asset('images/case-smartcity.jpg') }}"
                    alt="Ghana Smart City"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover opacity-55 transition duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>
                <div class="absolute bottom-6 left-6 z-10 max-w-lg">
                    <span class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-2 block">Smart Cities - Ghana</span>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-2">GhanaPostGPS &amp; Digital Addressing</h3>
                    <p class="text-gray-300 mb-4 font-light text-sm leading-relaxed">A unique code for every 5m&times;5m grid across Ghana — enabling emergency response and logistics for millions without postal addresses.</p>
                    <a class="bg-white text-black px-5 py-1.5 rounded-full font-medium hover:bg-gray-200 transition text-sm"
                       href="https://ghanapostgps.com" target="_blank" rel="noopener noreferrer">Read Case Study</a>
                </div>
            </div>

            {{-- Case Study 5: Nuru AgriTech --}}
            <div class="snap-item shrink-0 w-[85vw] md:w-[50vw] h-[280px] md:h-[300px] relative rounded-3xl overflow-hidden group">
                <img src="{{ asset('images/case-agritech.jpg') }}"
                    alt="Africa AgriTech AI"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover opacity-55 transition duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>
                <div class="absolute bottom-6 left-6 z-10 max-w-lg">
                    <span class="text-xs font-bold tracking-[0.2em] text-[#9c051d] uppercase mb-2 block">AgriTech - East Africa</span>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-2">Nuru: Offline AI Crop Disease Diagnosis</h3>
                    <p class="text-gray-300 mb-4 font-light text-sm leading-relaxed">Nuru uses on-device vision to diagnose crop diseases offline, reaching millions of smallholder farmers via the UN ENSURE programme.</p>
                    <a class="bg-white text-black px-5 py-1.5 rounded-full font-medium hover:bg-gray-200 transition text-sm"
                       href="https://plantvillage.psu.edu" target="_blank" rel="noopener noreferrer">Read Case Study</a>
                </div>
            </div>

        </div>

        {{-- ── Track 2: Past Projects ── --}}
        <div class="flex gap-6 overflow-x-auto hide-scroll snap-x snap-mandatory px-6 w-full pb-4 mt-4" id="proj-track">

            {{-- Project 1 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[200px] md:h-[210px] relative rounded-2xl overflow-hidden cursor-pointer shadow-lg" data-touch-card>
                <img src="{{ asset('images/project-edge.jpg') }}"
                    alt="Edge Intelligence Project"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-50 group-hover:opacity-0 transition-opacity duration-300"></div>
                <div class="absolute inset-0 bg-black/85 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center p-8">
                    <div class="flex gap-2 mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-xs font-medium px-2 py-1 bg-[#9c051d]/20 text-[#9c051d] rounded-md">Edge Computing</span>
                        <span class="text-xs font-medium px-2 bg-white/10 text-white rounded-md">Logistics</span>
                    </div>
                    <h3 class="text-2xl text-white font-semibold mb-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Project Zero Latency</h3>
                    <p class="text-gray-300 font-light leading-relaxed text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                        Deployed Monarch's Edge Intelligence to remote hardware — offline processing without latency in critical logistical environments.
                    </p>
                    <a href="#" class="mt-2 text-white text-sm font-medium flex items-center gap-2 hover:text-[#9c051d] transition w-max transform translate-y-4 group-hover:translate-y-0 duration-700 delay-75">
                        Visit Store
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[200px] md:h-[210px] relative rounded-2xl overflow-hidden cursor-pointer shadow-lg" data-touch-card>
                <img src="{{ asset('images/project-saas.jpg') }}"
                    alt="SaaS Platform"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-50 group-hover:opacity-0 transition-opacity duration-300"></div>
                <div class="absolute inset-0 bg-black/85 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center p-8">
                    <div class="flex gap-2 mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-xs font-medium px-2 py-1 bg-[#9c051d]/20 text-[#9c051d] rounded-md">SaaS</span>
                        <span class="text-xs font-medium px-2 bg-white/10 text-white rounded-md">Finance</span>
                    </div>
                    <h3 class="text-2xl text-white font-semibold mb-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">invenStore Platform</h3>
                    <p class="text-gray-300 font-light leading-relaxed text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                        Full-stack inventory management SaaS for SMEs across Ghana with real-time stock tracking and automated reorder alerts.
                    </p>
                    <a href="#" class="mt-2 text-white text-sm font-medium flex items-center gap-2 hover:text-[#9c051d] transition w-max transform translate-y-4 group-hover:translate-y-0 duration-700 delay-75">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[200px] md:h-[210px] relative rounded-2xl overflow-hidden cursor-pointer shadow-lg" data-touch-card>
                <img src="{{ asset('images/project-health.jpg') }}"
                    alt="Health Tech Project"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-50 group-hover:opacity-0 transition-opacity duration-300"></div>
                <div class="absolute inset-0 bg-black/85 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center p-8">
                    <div class="flex gap-2 mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-xs font-medium px-2 py-1 bg-[#9c051d]/20 text-[#9c051d] rounded-md">HealthTech</span>
                        <span class="text-xs font-medium px-2 bg-white/10 text-white rounded-md">AI</span>
                    </div>
                    <h3 class="text-2xl text-white font-semibold mb-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">MAI Health Dashboard</h3>
                    <p class="text-gray-300 font-light leading-relaxed text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                        AI-powered health monitoring dashboard for clinic staff, surfacing patient trends and flagging anomalies with zero manual input.
                    </p>
                    <a href="#" class="mt-2 text-white text-sm font-medium flex items-center gap-2 hover:text-[#9c051d] transition w-max transform translate-y-4 group-hover:translate-y-0 duration-700 delay-75">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            {{-- Project 4 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[200px] md:h-[210px] relative rounded-2xl overflow-hidden cursor-pointer shadow-lg" data-touch-card>
                <img src="{{ asset('images/project-kyc.jpg') }}"
                    alt="KYC Compliance AI"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-50 group-hover:opacity-0 transition-opacity duration-300"></div>
                <div class="absolute inset-0 bg-black/85 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center p-8">
                    <div class="flex gap-2 mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-xs font-medium px-2 py-1 bg-[#9c051d]/20 text-[#9c051d] rounded-md">Compliance</span>
                        <span class="text-xs font-medium px-2 bg-white/10 text-white rounded-md">FinTech</span>
                    </div>
                    <h3 class="text-2xl text-white font-semibold mb-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">KYC Automation Suite</h3>
                    <p class="text-gray-300 font-light leading-relaxed text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                        AI-driven KYC pipeline for a Ghanaian fintech — cutting onboarding time by 78% with full Bank of Ghana regulatory compliance.
                    </p>
                    <a href="#" class="mt-2 text-white text-sm font-medium flex items-center gap-2 hover:text-[#9c051d] transition w-max transform translate-y-4 group-hover:translate-y-0 duration-700 delay-75">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            {{-- Project 5 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[200px] md:h-[210px] relative rounded-2xl overflow-hidden cursor-pointer shadow-lg" data-touch-card>
                <img src="{{ asset('images/project-agriadvisor.jpg') }}"
                    alt="MAI AgriAdvisor"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-50 group-hover:opacity-0 transition-opacity duration-300"></div>
                <div class="absolute inset-0 bg-black/85 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center p-8">
                    <div class="flex gap-2 mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-xs font-medium px-2 py-1 bg-[#9c051d]/20 text-[#9c051d] rounded-md">AgriTech</span>
                        <span class="text-xs font-medium px-2 bg-white/10 text-white rounded-md">AI / MAI</span>
                    </div>
                    <h3 class="text-2xl text-white font-semibold mb-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">MAI AgriAdvisor</h3>
                    <p class="text-gray-300 font-light leading-relaxed text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                        Offline-capable crop advisory engine for smallholder farmers in Northern Ghana — real-time pest alerts, yield forecasts, and market prices via SMS.
                    </p>
                    <a href="#" class="mt-2 text-white text-sm font-medium flex items-center gap-2 hover:text-[#9c051d] transition w-max transform translate-y-4 group-hover:translate-y-0 duration-700 delay-75">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>

        {{-- ── Shared centered controls ── --}}
        <div class="unified-carousel-controls">
            <button class="carousel-arrow" id="unified-prev" aria-label="Previous">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <div class="carousel-dots" id="unified-dots"></div>
            <button class="carousel-arrow" id="unified-next" aria-label="Next">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>

    </section>

</x-main-layout>