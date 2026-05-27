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
        
        /* Skill Bar Animation */
        @keyframes fillBar {
            from { width: 0%; }
        }
        .skill-progress { animation: fillBar 1.5s ease-out forwards; }
    </style>

    <div class="portfolio-wrapper bg-slate-950 text-slate-300 font-mono min-h-screen overflow-x-hidden selection:bg-neon-blue selection:text-black cursor-crosshair relative">
        
        <!-- Background Effects (Absolute to stay inside wrapper) -->
        <div id="spotlight-skills" class="absolute inset-0 z-0 pointer-events-none transition-opacity duration-500 opacity-0" 
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
                <div class="text-xs text-slate-600 font-bold" id="clock-skills">00:00:00</div>
            </header>


            <!-- Skills Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Backend Systems -->
                <div class="bg-slate-900/40 border border-slate-800 p-8 rounded-lg backdrop-blur-sm hover:border-neon-blue/30 transition-colors group">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-3 h-3 bg-neon-blue rounded-full animate-pulse"></div>
                        <h2 class="text-xl font-bold text-slate-100 max-sm:text-[15px]">Backend_Architecture</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <!-- PHP -->
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="text-slate-300 max-sm:text-[10px]">PHP</span>
                                <span class="text-neon-blue">90%</span>
                            </div>
                            <div class="h-2 bg-slate-800 rounded-full overflow-hidden">
                                <div class="h-full bg-neon-blue skill-progress shadow-[0_0_10px_#00f3ff]" style="width: 90%"></div>
                            </div>
                        </div>

                        <!-- MySQL -->
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="text-slate-300  max-sm:text-[10px]">MySQL / Database Design</span>
                                <span class="text-neon-blue">85%</span>
                            </div>
                            <div class="h-2 bg-slate-800 rounded-full overflow-hidden">
                                <div class="h-full bg-neon-blue skill-progress shadow-[0_0_10px_#00f3ff]" style="width: 85%; animation-delay: 0.2s"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frontend Interface -->
                <div class="bg-slate-900/40 border border-slate-800 p-8 rounded-lg backdrop-blur-sm hover:border-neon-green/30 transition-colors group">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-3 h-3 bg-neon-green rounded-full animate-pulse"></div>
                        <h2 class="text-xl font-bold text-slate-100 max-sm:text-[15px]">Frontend_Interface</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <!-- HTML/CSS -->
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="text-slate-300 max-sm:text-[10px]">HTML5 & CSS3</span>
                                <span class="text-neon-green">95%</span>
                            </div>
                            <div class="h-2 bg-slate-800 rounded-full overflow-hidden">
                                <div class="h-full bg-neon-green skill-progress shadow-[0_0_10px_#00ff9d]" style="width: 95%; animation-delay: 0.4s"></div>
                            </div>
                        </div>

                        <!-- Javascript -->
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="text-slate-300  max-sm:text-[10px]">JavaScript (ES6+)</span>
                                <span class="text-neon-green">88%</span>
                            </div>
                            <div class="h-2 bg-slate-800 rounded-full overflow-hidden">
                                <div class="h-full bg-neon-green skill-progress shadow-[0_0_10px_#00ff9d]" style="width: 88%; animation-delay: 0.6s"></div>
                            </div>
                        </div>

                        <!-- Ajax -->
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="text-slate-300  max-sm:text-[10px]">Ajax / Async Requests</span>
                                <span class="text-neon-green">92%</span>
                            </div>
                            <div class="h-2 bg-slate-800 rounded-full overflow-hidden">
                                <div class="h-full bg-neon-green skill-progress shadow-[0_0_10px_#00ff9d]" style="width: 92%; animation-delay: 0.8s"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Libraries & Tools -->
                <div class="lg:col-span-2 bg-slate-900/40 border border-slate-800 p-8 rounded-lg backdrop-blur-sm hover:border-neon-purple/30 transition-colors">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-3 h-3 bg-neon-purple rounded-full animate-pulse"></div>
                        <h2 class="text-xl font-bold text-slate-100  max-sm:text-[15px]">Libraries_&_Frameworks</h2>
                    </div>

                    <div class="flex flex-wrap gap-4 max-sm:gap-2 max-sm:text-[10px]" >
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            Laravel
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            Livewire
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            Alpine.js
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            React Native
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            JS Libraries
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            SVG
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            jQuery
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            Tailwind CSS
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            Bootstrap
                        </span>
                        <span class="px-4 py-2 bg-slate-800 border border-slate-700 rounded text-neon-purple hover:bg-neon-purple/10 hover:border-neon-purple transition-all cursor-default">
                            Git / Version Control
                        </span>
                    </div>
                </div>

            </div>

        </div>
        
        <div class="scanline"></div>
    </div>

    <script>

        document.addEventListener("livewire:navigated", () => {

                // Spotlight
                const spotlightSkills = document.getElementById('spotlight-skills');
                document.addEventListener('mousemove', (e) => {
                    if(spotlightSkills) {
                        spotlightSkills.style.opacity = '1';
                        spotlightSkills.style.setProperty('--mouse-x', e.pageX + 'px');
                        spotlightSkills.style.setProperty('--mouse-y', e.pageY + 'px');
                    }
                });

                // Clock
                setInterval(() => {
                    const now = new Date();
                    const clock = document.getElementById('clock-skills');
                    if(clock) {
                        clock.innerText = now.toISOString().split('T')[1].split('.')[0] + " UTC";
                    }
                }, 1000);

        });
    </script>
</div>