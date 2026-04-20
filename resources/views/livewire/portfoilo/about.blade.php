<div>
    {{-- Tailwind and Custom Config --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        'neon-blue': '#00f3ff',
                        'neon-green': '#00ff9d',
                        'neon-purple': '#b900ff',
                        'neon-pink': '#ff00ff',
                    },
                    animation: {
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <style>
        .portfolio-wrapper ::-webkit-scrollbar { width: 8px; }
        .portfolio-wrapper ::-webkit-scrollbar-track { background: #020617; }
        .portfolio-wrapper ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 4px; }
        
        .scanline {
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0) 50%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.2));
            background-size: 100% 4px;
            position: absolute; pointer-events: none; inset: 0; z-index: 50; opacity: 0.15;
        }
        
        .glow-text { text-shadow: 0 0 10px rgba(0, 243, 255, 0.3); }
    </style>

    <div class="portfolio-wrapper bg-slate-950 text-slate-300 font-mono min-h-screen overflow-x-hidden selection:bg-neon-blue selection:text-black cursor-crosshair relative">
        
        <!-- Background Effects (Absolute to stay inside wrapper) -->
        <div id="spotlight-about" class="absolute inset-0 z-0 pointer-events-none transition-opacity duration-500 opacity-0" 
             style="background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(185, 0, 255, 0.06), transparent 80%);">
        </div>

        <div class="absolute inset-0 z-0 opacity-[0.07] pointer-events-none" 
             style="background-image: linear-gradient(#334155 1px, transparent 1px), linear-gradient(90deg, #334155 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        <!-- Main Content -->
        <div class="relative z-10 flex flex-col min-h-screen p-6 md:p-12 max-w-7xl mx-auto">
            
            <!-- Header -->
            <header class="flex justify-between items-center border-b border-slate-800/50 pb-4 mb-12">
                <div class="flex items-center gap-3">
                    <a href="{{route("home")}}" class="text-neon-purple hover:text-neon-blue transition-colors duration-300 flex items-center gap-2 group">
                        <span class="group-hover:-translate-x-1 transition-transform">&lt;</span> <span>System::Home</span>
                    </a>
                </div>
                <div class="text-xs text-slate-600 font-bold" id="clock-about">00:00:00</div>
            </header>

   

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Image Section (Responsive: Max width on mobile to prevent overflow) -->
                <div class="relative group max-w-sm mx-auto lg:max-w-full w-full">
                    <!-- Decorative elements behind image -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-neon-blue to-neon-purple rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                    
                    <div class="relative bg-slate-900 border border-slate-800 p-2 rounded-2xl overflow-hidden">
                        <div class="aspect-square overflow-hidden rounded-xl relative">
                            {{-- Overlay scanline for image --}}
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-neon-blue/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 z-10 pointer-events-none"></div>
                            
                            <img src="{{ asset('storage/image/adams.jpg') }}" alt="Usman Adams" class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700 grayscale hover:grayscale-0">
                        </div>
                        
                        <!-- Tech decorations -->
                        <div class="absolute top-4 right-4 flex gap-1">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 text-xs text-neon-blue font-mono opacity-70">
                            ID: UA-DEV-001
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="space-y-8">
                    <div class="bg-slate-900/40 border border-slate-800 p-6 md:p-8 rounded-lg backdrop-blur-sm hover:border-neon-blue/30 transition-colors relative overflow-hidden group">
                        <div class="absolute top-0 left-0 w-1 h-full bg-neon-blue/50 group-hover:bg-neon-blue transition-colors"></div>
                        
                        <h2 class="text-2xl font-bold text-slate-100 mb-4 flex items-center gap-2">
                            <span class="text-neon-blue">01.</span> About_Me
                        </h2>
                        
                        <div class="space-y-4 text-slate-400 leading-relaxed max-sm:text-[13px]">
                            <p>
                                Hello! I'm <strong class="text-slate-200">Usman Adams</strong>, a passionate developer dedicated to building exceptional digital experiences.
                            </p>
                            <p>
                                I am currently a student at the <strong class="text-slate-200">Federal University Dustin-ma</strong>. As a Full Stack and App Developer, I don't just build websites; I engineer robust <strong class="text-neon-purple">web and mobile applications</strong> tailored to solve real-world problems.
                            </p>
                            
                            <p>
                                I strive for professionalism, efficiency, and creativity in every line of code I write.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 text-center">
                        <a href="{{route("contact")}}" class="px-8 py-3 bg-neon-blue/10 border border-neon-blue/50 text-neon-blue rounded hover:bg-neon-blue hover:text-black transition-all duration-300 font-bold tracking-wider group relative overflow-hidden">
                            <span class="relative z-10 ">LET'S_CONNECT</span>
                            <div class="absolute inset-0 bg-neon-blue transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300 z-0"></div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        
        <div class="scanline"></div>
    </div>

    <script>
        // Spotlight
        const spotlightAbout = document.getElementById('spotlight-about');
        document.addEventListener('mousemove', (e) => {
            if(spotlightAbout) {
                spotlightAbout.style.opacity = '1';
                spotlightAbout.style.setProperty('--mouse-x', e.pageX + 'px');
                spotlightAbout.style.setProperty('--mouse-y', e.pageY + 'px');
            }
        });

        // Clock
        setInterval(() => {
            const now = new Date();
            const clock = document.getElementById('clock-about');
            if(clock) {
                clock.innerText = now.toISOString().split('T')[1].split('.')[0] + " UTC";
            }
        }, 1000);
    </script>
</div>