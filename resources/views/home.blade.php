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
             style="border-color: var(--border-color); background: var(--bg-primary); content-visibility: auto; contain-intrinsic-size: auto none auto 2200px;">

        <style>
            .product-card-3d {
                transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease, border-color 0.35s ease !important;
                will-change: transform;
            }
            .product-card-3d:hover {
                transform: translateY(-8px) scale(1.018) !important;
                border-color: rgba(255, 255, 255, 0.28) !important;
                box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.85), 0 0 35px rgba(156, 5, 29, 0.15) !important;
            }
            html.light-theme .product-card-3d:hover {
                border-color: rgba(156, 5, 29, 0.3) !important;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.12), 0 0 25px rgba(156, 5, 29, 0.1) !important;
            }
        </style>

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
                        Explore our flagship platforms engineered to automate business processes, scale Corporate event operations, and multi-asset management.
                    </p>
                </div>
            </div>

            {{-- Main Products Showcase Cards --}}
            <div class="space-y-16 lg:space-y-24">

                {{-- =========================================
                     PRODUCT 1: Verified (Identity & KYC Provider)
                ========================================= --}}
                <div class="product-card-3d group relative rounded-[32px] p-8 sm:p-10 lg:p-14 border border-white/10 overflow-hidden shadow-2xl"
                     style="background: linear-gradient(135deg, rgba(18, 18, 26, 0.88) 0%, rgba(8, 8, 14, 0.92) 100%); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);"
                     data-product="verified">

                    {{-- Ambient Background Image Preview (Desktop only; removed on smaller screens) --}}
                    <div class="hidden lg:block absolute right-0 top-0 w-full max-w-[380px] h-full pointer-events-none overflow-hidden lg:w-1/2">
                        <img src="{{ asset('images/project-kyc.jpg') }}" alt="Verified Identity System" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-[rgba(18,18,26,1)] via-[rgba(18,18,26,0.6)] to-transparent"></div>
                    </div>

                    {{-- Card Grid: Description & Visual Terminal --}}
                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                        {{-- Left Column: Core Narrative & Features (Full view on smaller screens, 7 cols on lg) --}}
                        <div class="w-full lg:col-span-7 space-y-6">

                            {{-- Product Title & Headline --}}
                            <div>
                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-2 flex items-center gap-3">
                                    <span>VERIFIED!</span>
                                    <svg class="w-7 h-7 sm:w-8 sm:h-8 text-red-500 shrink-0 drop-shadow-[0_0_12px_rgba(59,130,246,0.45)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </h3>
                                <p class="text-lg sm:text-xl font-bold text-gray-300">
                                    Sovereign Identity Provider &amp; Verification API
                                </p>
                            </div>

                            {{-- Deep Narrative --}}
                            <p class="text-sm sm:text-base text-gray-400 leading-relaxed font-light">
                                VERIFIED! allows Enterprise Institutions, Banks, and Fintechs to complete regulatory KYC in seconds by querying our API. Users create a  <b>SINGLE</b> sovereign account and complete comprehensive multi-layer checks—including 3D Liveness Detection, Government ID &amp; Nationality Verification, Address Authentication, Fingerprint Capture, and FaceID. <b>ONE Account, VERIFIED! for All</b>.
                            </p>

                            {{-- Features with Semantic Crimson-Accented Icons --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 3H5a2 2 0 00-2 2v2m0 10v2a2 2 0 002 2h2m10-18h2a2 2 0 012 2v2m0 10v2a2 2 0 01-2 2h-2M9 10h.01M15 10h.01M9 14s1 1.5 3 1.5 3-1.5 3-1.5"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">3D Liveness &amp; FaceID</div>
                                        <div class="text-gray-400 font-medium">Passive biometric depth anti-spoofing</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Nationality &amp; ID Checks</div>
                                        <div class="text-gray-400 font-medium">Government database &amp; passport verification</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 004 11m0 0a8 8 0 00.99 3.868"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Fingerprint &amp; Address Proof</div>
                                        <div class="text-gray-400 font-medium">Physical biometric capture &amp; utility mapping</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">User-Approved API Handshake</div>
                                        <div class="text-gray-400 font-medium">Explicit user login &amp; one-click approval</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Action Buttons with Lower Shade of Crimson --}}
                            <div class="flex items-center gap-4 pt-4 flex-wrap">
                                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#941212] hover:bg-[#43040d] border border-[#780918]/60 text-white text-xs sm:text-sm font-semibold uppercase tracking-wider transition-all duration-300 hover:scale-[1.02] shadow-[0_4px_16px_rgba(90,6,18,0.3)]">
                                    <span>Integrate Verified API</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <a href="/services" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/[0.04] hover:bg-white/[0.08] border border-white/10 text-xs sm:text-sm font-medium transition-all duration-200 hover:scale-[1.02]">
                                    <span>Explore Ecosystem</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- =========================================
                     PRODUCT 2: ticketMan (Event Biometric Management)
                ========================================= --}}
                <div class="product-card-3d group relative rounded-[32px] p-8 sm:p-10 lg:p-14 border border-white/10 overflow-hidden shadow-2xl"
                     style="background: linear-gradient(135deg, rgba(18, 18, 26, 0.88) 0%, rgba(8, 8, 14, 0.92) 100%); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);"
                     data-product="ticketman">

                    {{-- Ambient Background Image Preview (Desktop only; removed on smaller screens) --}}
                    <div class="hidden lg:block absolute right-0 top-0 w-full max-w-[380px] h-full pointer-events-none overflow-hidden lg:w-1/2">
                        <img src="{{ asset('images/service-security-systems.jpg') }}" alt="ticketMan Hardware Gateway" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-[rgba(18,18,26,1)] via-[rgba(18,18,26,0.6)] to-transparent"></div>
                    </div>

                    {{-- Card Grid: Description & Visual Terminal --}}
                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                        {{-- Left Column: Core Narrative & Features (Full view on smaller screens, 7 cols on lg) --}}
                        <div class="w-full lg:col-span-7 space-y-6">

                            {{-- Product Title & Headline --}}
                            <div>
                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-2 flex items-center gap-3">
                                    <span>ticketMan</span>
                                    <svg class="w-7 h-7 sm:w-8 sm:h-8 text-red-500 shrink-0 drop-shadow-[0_0_12px_rgba(59,130,246,0.45)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                    </svg>
                                </h3>
                                <p class="text-lg sm:text-xl font-bold text-gray-300">
                                    Event Ticketing &amp; Biometric Access Management System
                                </p>
                            </div>

                            {{-- Deep Narrative --}}
                            <p class="text-sm sm:text-base text-gray-400 leading-relaxed font-light">
                                ticketMan is an end-to-end event ticketing and crowd management platform that eliminates paper tickets and wristband fraud. Beyond handling digital ticket sales, we train your event operations and security team on how to operate our custom-built fingerprint and FaceID verification system to grant access to attendees who have actually paid. Attendees simply receive a digital QR code or barcode to scan at the gate; their biometrics are captured once at entry, which then serves as their identity for seamless exits and re-entries with zero need for wristbands.
                            </p>

                            {{-- Features with Semantic Crimson-Accented Icons --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 004 11m0 0a8 8 0 00.99 3.868"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Biometric Gate Verification</div>
                                        <div class="text-gray-400 font-medium">Instant fingerprint &amp; FaceID gate check; no wristbands</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">QR &amp; BarCode Entry</div>
                                        <div class="text-gray-400 font-medium">Rapid mobile scanner pass with zero paper ticket printing</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Event Team Training</div>
                                        <div class="text-gray-400 font-medium">Hands-on crew onboarding &amp; custom hardware setup</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Frictionless Re-Entry</div>
                                        <div class="text-gray-400 font-medium">Attendees exit and re-enter using their biometrics alone</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Action Buttons with Lower Shade of Crimson --}}
                            <div class="flex items-center gap-4 pt-4 flex-wrap">
                                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#941212] hover:bg-[#43040d] border border-[#780918]/60 text-white text-xs sm:text-sm font-semibold uppercase tracking-wider transition-all duration-300 hover:scale-[1.02] shadow-[0_4px_16px_rgba(90,6,18,0.3)]">
                                    <span>Deploy ticketMan for Your Event</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <a href="/services" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/[0.04] hover:bg-white/[0.08] border border-white/10 text-xs sm:text-sm font-medium transition-all duration-200 hover:scale-[1.02]">
                                    <span>Explore Ecosystem</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- =========================================
                     PRODUCT 3: roofMe (Real Estate Management)
                ========================================= --}}
                <div class="product-card-3d group relative rounded-[32px] p-8 sm:p-10 lg:p-14 border border-white/10 overflow-hidden shadow-2xl"
                     style="background: linear-gradient(135deg, rgba(18, 18, 26, 0.88) 0%, rgba(8, 8, 14, 0.92) 100%); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);"
                     data-product="roofme">

                    {{-- Ambient Background Image Preview (Desktop only; removed on smaller screens) --}}
                    <div class="hidden lg:block absolute right-0 top-0 w-full max-w-[380px] h-full pointer-events-none overflow-hidden lg:w-1/2">
                        <img src="{{ asset('images/case-smartcity.jpg') }}" alt="roofMe Real Estate Platform" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-[rgba(18,18,26,1)] via-[rgba(18,18,26,0.6)] to-transparent"></div>
                    </div>

                    {{-- Card Grid: Description & Visual Terminal --}}
                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                        {{-- Left Column: Core Narrative & Features (Full view on smaller screens, 7 cols on lg) --}}
                        <div class="w-full lg:col-span-7 space-y-6">

                            {{-- Product Title & Headline --}}
                            <div>
                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-2 flex items-center gap-3">
                                    <span>roofMe</span>
                                    <svg class="w-7 h-7 sm:w-8 sm:h-8 text-red-500 shrink-0 drop-shadow-[0_0_12px_rgba(59,130,246,0.45)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </h3>
                                <p class="text-lg sm:text-xl font-bold text-gray-300">
                                    Property &amp; Hospitality Management System
                                </p>
                            </div>

                            {{-- Deep Narrative --}}
                            <p class="text-sm sm:text-base text-gray-400 leading-relaxed font-light">
                                roofMe is a modern real estate and hospitality operating system designed specifically for guest houses, boutique apartments, residential buildings, hotels, and motels. Featuring integrated digital rent and reservation payment gateways, roofMe connects property operators and residents seamlessly: owners and managers operate from a powerful desktop and tablet application to monitor occupancy rates, track cash collections, and manage lease agreements; while tenants and guests utilize a lightweight mobile application to pay rent, view lease terms, and submit maintenance tickets in real time.
                            </p>

                            {{-- Features with Semantic Crimson-Accented Icons --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Integrated Rent Payments</div>
                                        <div class="text-gray-400 font-medium">Native card, bank transfer, and mobile money payouts</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Desktop &amp; Tablet Console</div>
                                        <div class="text-gray-400 font-medium">Live occupancy analytics &amp; financial ledger for owners</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Tenant &amp; Guest Mobile App</div>
                                        <div class="text-gray-400 font-medium">One-tap rent payments, digital lease, &amp; service requests</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white/[0.03] border border-white/5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-red-400 border border-blue-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                                    </div>
                                    <div class="text-xs">
                                        <div class="text-white font-bold">Multi-Asset Adaptability</div>
                                        <div class="text-gray-400 font-medium">Guest houses, apartments, boutique hotels, &amp; motels</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Action Buttons with Lower Shade of Crimson --}}
                            <div class="flex items-center gap-4 pt-4 flex-wrap">
                                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#941212] hover:bg-[#43040d] border border-[#780918]/60 text-white text-xs sm:text-sm font-semibold uppercase tracking-wider transition-all duration-300 hover:scale-[1.02] shadow-[0_4px_16px_rgba(90,6,18,0.3)]">
                                    <span>Get roofMe for Your Properties</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <a href="/services" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/[0.04] hover:bg-white/[0.08] border border-white/10 text-xs sm:text-sm font-medium transition-all duration-200 hover:scale-[1.02]">
                                    <span>Explore Ecosystem</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =============================================
         SERVICES SECTION — COMPACT SCROLL-DRIVEN INFINITE CAROUSEL
         Seamless infinite loop that moves forward/backward with scroll velocity
    ============================================= --}}
    <section class="services-carousel-section py-20 px-4 sm:px-6 lg:px-8 relative z-10 border-t border-b overflow-hidden"
             style="border-color: var(--border-color); background: var(--bg-section);">

        <div class="max-w-[1240px] mx-auto mb-10 reveal">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                <div>
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-semibold tracking-tight" style="color: var(--text-primary);">
                        Our Specialized Services
                    </h3>
                </div>
                <div class="flex items-center gap-3">
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
                    <img src="{{ asset('images/service-saas.jpg') }}" alt="SaaS Platforms" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">SaaS Platforms</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Software. Built for enterprise scale and multi-tenant cloud operations.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2: Workflow Automation --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-workflow.jpg') }}" alt="Workflow Automation" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Workflow Automation</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Automate. Optimize. Intelligent AI systems connected to your pipelines.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/contact" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Inquire</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 3: Software Development --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-softwaredev.jpg') }}" alt="Software Development" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Software Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Build. Deploy. Scale. Mission-critical bespoke backends and cloud services.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 4: Web Development --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-webdev.jpg') }}" alt="Web Development" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Web Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Identity. Performance. High-impact reactive web interfaces engineered to convert.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 5: Integrated Systems --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-integrated-systems.jpg') }}" alt="Integrated Systems" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Integrated Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Engineered as one. Hardware telemetry and edge systems built for the world.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 6: Security Systems --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                    <img src="{{ asset('images/service-security-systems.jpg') }}" alt="Security Systems" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Security Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Intelligent. Connected. Secure. Cyber defense and access perimeter hardening.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SET 2 (Exact Duplicate for Infinite Continuous Loop) --}}
                {{-- Service 1 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-saas.jpg') }}" alt="" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">SaaS Platforms</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Software. Built for enterprise scale and multi-tenant cloud operations.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-workflow.jpg') }}" alt="" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Workflow Automation</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Automate. Optimize. Intelligent AI systems connected to your pipelines.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/contact" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Inquire</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 3 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-softwaredev.jpg') }}" alt="" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Software Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Build. Deploy. Scale. Mission-critical bespoke backends and cloud services.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 4 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-webdev.jpg') }}" alt="" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Web Development</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Identity. Performance. High-impact reactive web interfaces engineered to convert.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 5 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-integrated-systems.jpg') }}" alt="" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Integrated Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Engineered as one. Hardware telemetry and edge systems built for the world.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 6 Duplicate --}}
                <div class="service-compact-card group relative w-[300px] sm:w-[330px] h-[240px] shrink-0 rounded-2xl overflow-hidden border border-white/10 shadow-lg transition-all duration-300 hover:border-white/30 hover:shadow-2xl" aria-hidden="true">
                    <img src="{{ asset('images/service-security-systems.jpg') }}" alt="" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent z-0 pointer-events-none"></div>
                    <div class="relative z-10 h-full p-5 flex flex-col justify-end">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Security Systems</h4>
                            <p class="text-xs text-gray-300 line-clamp-2 mb-3">Intelligent. Connected. Secure. Cyber defense and access perimeter hardening.</p>
                            <div class="flex items-center gap-2">
                                <a href="/services" class="px-3.5 py-1.5 rounded-full bg-[#5a0612] hover:bg-[#43040d] border border-[#780918]/60 text-white text-[11px] font-semibold transition">Learn More</a>
                                <a href="/store" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-[11px] border border-white/20 transition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Services Carousel Scripts --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            /* ============================================================
               1. SERVICES INFINITE CAROUSEL WITH SCROLL-VELOCITY DRIVER
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
        });
    </script>

    {{-- =============================================
         MAI AI SECTION
    ============================================= --}}
    <section class="mai-section relative overflow-hidden z-10 my-8" style="background: #050510;">
        <img src="{{ asset('images/mai-bg.jpg') }}"
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
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[220px] md:h-[240px] relative rounded-2xl overflow-hidden shadow-lg border border-white/10 transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                <img src="{{ asset('images/project-edge.jpg') }}"
                    alt="Edge Intelligence Project"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-0 pointer-events-none"></div>
                <div class="relative z-10 h-full p-6 flex flex-col justify-end">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-white rounded-md border border-white/15">Edge Computing</span>
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-gray-300 rounded-md border border-white/10">Logistics</span>
                    </div>
                    <h3 class="text-xl md:text-2xl text-white font-semibold mb-1">Project Zero Latency</h3>
                    <p class="text-gray-300 font-light text-xs sm:text-sm line-clamp-2 max-w-lg mb-2">
                        Deployed Monarch's Edge Intelligence to remote hardware — offline processing without latency in critical logistical environments.
                    </p>
                    <a href="/store" class="text-xs font-semibold text-white hover:text-blue-400 transition flex items-center gap-1.5 w-max">
                        <span>Visit Store</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[220px] md:h-[240px] relative rounded-2xl overflow-hidden shadow-lg border border-white/10 transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                <img src="{{ asset('images/project-saas.jpg') }}"
                    alt="SaaS Platform"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-0 pointer-events-none"></div>
                <div class="relative z-10 h-full p-6 flex flex-col justify-end">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-white rounded-md border border-white/15">SaaS</span>
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-gray-300 rounded-md border border-white/10">Finance</span>
                    </div>
                    <h3 class="text-xl md:text-2xl text-white font-semibold mb-1">invenStore Platform</h3>
                    <p class="text-gray-300 font-light text-xs sm:text-sm line-clamp-2 max-w-lg mb-2">
                        Full-stack inventory management SaaS for SMEs across Ghana with real-time stock tracking and automated reorder alerts.
                    </p>
                    <a href="/services" class="text-xs font-semibold text-white hover:text-blue-400 transition flex items-center gap-1.5 w-max">
                        <span>Learn More</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[220px] md:h-[240px] relative rounded-2xl overflow-hidden shadow-lg border border-white/10 transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                <img src="{{ asset('images/project-health.jpg') }}"
                    alt="Health Tech Project"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-0 pointer-events-none"></div>
                <div class="relative z-10 h-full p-6 flex flex-col justify-end">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-white rounded-md border border-white/15">HealthTech</span>
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-gray-300 rounded-md border border-white/10">AI</span>
                    </div>
                    <h3 class="text-xl md:text-2xl text-white font-semibold mb-1">MAI Health Dashboard</h3>
                    <p class="text-gray-300 font-light text-xs sm:text-sm line-clamp-2 max-w-lg mb-2">
                        AI-powered health monitoring dashboard for clinic staff, surfacing patient trends and flagging anomalies with zero manual input.
                    </p>
                    <a href="/services" class="text-xs font-semibold text-white hover:text-blue-400 transition flex items-center gap-1.5 w-max">
                        <span>Learn More</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Project 4 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[220px] md:h-[240px] relative rounded-2xl overflow-hidden shadow-lg border border-white/10 transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                <img src="{{ asset('images/project-kyc.jpg') }}"
                    alt="KYC Compliance AI"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-0 pointer-events-none"></div>
                <div class="relative z-10 h-full p-6 flex flex-col justify-end">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-white rounded-md border border-white/15">Compliance</span>
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-gray-300 rounded-md border border-white/10">FinTech</span>
                    </div>
                    <h3 class="text-xl md:text-2xl text-white font-semibold mb-1">KYC Automation Suite</h3>
                    <p class="text-gray-300 font-light text-xs sm:text-sm line-clamp-2 max-w-lg mb-2">
                        AI-driven KYC pipeline for a Ghanaian fintech — cutting onboarding time by 78% with full Bank of Ghana regulatory compliance.
                    </p>
                    <a href="/services" class="text-xs font-semibold text-white hover:text-blue-400 transition flex items-center gap-1.5 w-max">
                        <span>Learn More</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Project 5 --}}
            <div class="group snap-item shrink-0 w-[80vw] md:w-[50vw] h-[220px] md:h-[240px] relative rounded-2xl overflow-hidden shadow-lg border border-white/10 transition-all duration-300 hover:border-white/30 hover:shadow-2xl">
                <img src="{{ asset('images/project-agriadvisor.jpg') }}"
                    alt="MAI AgriAdvisor"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 z-0">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-0 pointer-events-none"></div>
                <div class="relative z-10 h-full p-6 flex flex-col justify-end">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-white rounded-md border border-white/15">AgriTech</span>
                        <span class="text-[11px] font-medium px-2 py-0.5 bg-white/10 backdrop-blur-md text-gray-300 rounded-md border border-white/10">AI / MAI</span>
                    </div>
                    <h3 class="text-xl md:text-2xl text-white font-semibold mb-1">MAI AgriAdvisor</h3>
                    <p class="text-gray-300 font-light text-xs sm:text-sm line-clamp-2 max-w-lg mb-2">
                        Offline-capable crop advisory engine for smallholder farmers in Northern Ghana — real-time pest alerts, yield forecasts, and market prices via SMS.
                    </p>
                    <a href="/services" class="text-xs font-semibold text-white hover:text-blue-400 transition flex items-center gap-1.5 w-max">
                        <span>Learn More</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
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