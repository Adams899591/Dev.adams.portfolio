<div>
    {{-- Tailwind and Custom Config for this page --}}
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
                    },
                    animation: {
                        'spin-slow': 'spin 20s linear infinite',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        .portfolio-wrapper ::-webkit-scrollbar { width: 8px; }
        .portfolio-wrapper ::-webkit-scrollbar-track { background: #020617; }
        .portfolio-wrapper ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 4px; }
        
        /* CRT Scanline Effect */
        .scanline {
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0) 50%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.2));
            background-size: 100% 4px;
            position: absolute; pointer-events: none; inset: 0; z-index: 50; opacity: 0.15;
        }
        
        /* Glow Effects */
        .glow-text { text-shadow: 0 0 10px rgba(0, 243, 255, 0.3); }
        .glow-box { box-shadow: 0 0 15px rgba(0, 243, 255, 0.05); }
        .glow-box:hover { box-shadow: 0 0 25px rgba(0, 243, 255, 0.15); }
    </style>

    {{-- Wrapper to isolate styles --}}
    <div class="portfolio-wrapper bg-slate-950 text-slate-300 font-mono min-h-screen overflow-x-hidden selection:bg-neon-blue selection:text-black cursor-crosshair relative">
        
        <!-- Dynamic Mouse Spotlight Background -->
        <div id="spotlight-projects" class="absolute inset-0 z-0 pointer-events-none transition-opacity duration-500 opacity-0" 
             style="background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(0, 243, 255, 0.06), transparent 80%);">
        </div>

        <!-- Technical Grid Background -->
        <div class="absolute inset-0 z-0 opacity-[0.07] pointer-events-none" 
             style="background-image: linear-gradient(#334155 1px, transparent 1px), linear-gradient(90deg, #334155 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        <!-- Main Container -->
        <div class="relative z-10 flex flex-col min-h-screen p-6 md:p-12 max-w-7xl mx-auto">
            
            <!-- Header / Navigation -->
            <header class="flex justify-between items-center border-b border-slate-800/50 pb-4 mb-12">
                <div class="flex items-center gap-3">
                    <a href="{{route("home")}}" class="text-neon-blue hover:text-neon-green transition-colors duration-300 flex items-center gap-2 group">
                        <span class="group-hover:-translate-x-1 transition-transform">&lt;</span> <span>System::Home</span>
                    </a>
                </div>
                <div class="text-xs text-slate-600 font-bold" id="clock-projects">00:00:00</div>
            </header>

            <!-- STATISTICS SECTION (As requested) -->
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-24 mb-20 border-b border-slate-800/50 pb-12">
                <!-- Stat 1 -->
                <div class="text-center group">
                    <div class="text-4xl md:text-6xl font-bold text-slate-100 mb-2 group-hover:text-neon-blue transition-colors duration-300 glow-text">
                        +<span class="counter" data-target="3">0</span>
                    </div>
                    <div class="text-sm text-slate-500 tracking-widest uppercase">Years Experience</div>
                </div>
                
                <!-- Divider -->
                <div class="hidden md:block w-px h-16 bg-slate-800"></div>

                <!-- Stat 2 -->
                <div class="text-center group">
                    <div class="text-4xl md:text-6xl font-bold text-slate-100 mb-2 group-hover:text-neon-green transition-colors duration-300 glow-text">
                        +<span class="counter" data-target="8">0</span>
                    </div>
                    <div class="text-sm text-slate-500 tracking-widest uppercase">Projects Completed</div>
                </div>

                <!-- Divider -->
                <div class="hidden md:block w-px h-16 bg-slate-800"></div>

                <!-- Stat 3 -->
                <div class="text-center group">
                    <div class="text-4xl md:text-6xl font-bold text-slate-100 mb-2 group-hover:text-neon-purple transition-colors duration-300 glow-text">
                        +<span class="counter" data-target="7">0</span>
                    </div>
                    <div class="text-sm text-slate-500 tracking-widest uppercase">Web Application Build</div>
                </div>
            </div>

            <!-- PROJECTS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Project Card 1 -->
                @include('livewire.projects.game')

                <!-- Project Card 2 -->
                @include('livewire.projects.portal')

                <!-- Project Card 3 --> 
                @include('livewire.projects.portfolio1')

                <!-- Project Card 4 -->
                @include('livewire.projects.ecommerce')

                <!-- Project Card 5 -->
                @include('livewire.projects.business')

                <!-- Project Card 6 -->
                @include('livewire.projects.restaurant')

                <!-- Project Card 7 -->
                @include('livewire.projects.social')

                <!-- Project Card  8-->
                @include('livewire.projects.portfolio2')

                <!-- Project Card  9-->
                @include('livewire.projects.banking')

                <!-- Project Card  10-->
                @include('livewire.projects.estate')

            </div>
        </div>
        
        <div class="scanline"></div>
    </div>

    <script>

        document.addEventListener("livewire:navigated", () => {

            // 1. Mouse Spotlight Effect
            const spotlightProjects = document.getElementById('spotlight-projects');
            document.addEventListener('mousemove', (e) => {
                if(spotlightProjects) {
                    spotlightProjects.style.opacity = '1';
                    spotlightProjects.style.setProperty('--mouse-x', e.pageX + 'px');
                    spotlightProjects.style.setProperty('--mouse-y', e.pageY + 'px');
                }
            });

            // 2. Clock
            setInterval(() => {
                const now = new Date();
                const clock = document.getElementById('clock-projects');
                if(clock) {
                    clock.innerText = now.toISOString().split('T')[1].split('.')[0] + " UTC";
                }
            }, 1000);

            // 3. Counter Animation for Stats
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const duration = 1500; // animation duration in ms
                const increment = target / (duration / 16); // 60fps
                
                let current = 0;
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCounter();
            });

        });
    </script>
</div>
