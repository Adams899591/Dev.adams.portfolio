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
        /* Custom Scrollbar for this section */
        .portfolio-wrapper ::-webkit-scrollbar { width: 8px; }
        .portfolio-wrapper ::-webkit-scrollbar-track { background: #020617; }
        .portfolio-wrapper ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 4px; }
        
        /* Cursor Blink */
        .cursor-blink { animation: blink 1s step-end infinite; }
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

        /* CRT Scanline Effect */
        .scanline {
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0) 50%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.2));
            background-size: 100% 4px;
            position: fixed; pointer-events: none; inset: 0; z-index: 50; opacity: 0.15;
        }
        
        /* Glow Animation */
        .glow-text { text-shadow: 0 0 10px rgba(0, 243, 255, 0.3); }
    </style>

    {{-- Wrapper to isolate styles from the main layout --}}
    <div class="portfolio-wrapper bg-slate-950 text-slate-300 font-mono min-h-screen overflow-x-hidden selection:bg-neon-blue selection:text-black cursor-crosshair relative">
        
        <!-- Dynamic Mouse Spotlight Background -->
        <div id="spotlight" class="fixed inset-0 z-0 pointer-events-none transition-opacity duration-500 opacity-0" 
             style="background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(0, 243, 255, 0.06), transparent 80%);">
        </div>

        <!-- Technical Grid Background -->
        <div class="fixed inset-0 z-0 opacity-[0.07] pointer-events-none" 
             style="background-image: linear-gradient(#334155 1px, transparent 1px), linear-gradient(90deg, #334155 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        <!-- Main Container -->
        <div class="relative z-10 flex flex-col min-h-screen p-6 md:p-12 max-w-7xl mx-auto ">
            
            <!-- Header / Status Bar -->
            <header class="flex justify-between items-center border-b border-slate-800/50 pb-1 mb-12 opacity-0 transition-opacity duration-1000" id="header-bar">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-neon-green rounded-full shadow-[0_0_8px_#00ff9d] animate-pulse"></div>
                    <span class="text-xs tracking-[0.2em] text-slate-500 uppercase">System::Online</span>
                </div>
                <div class="text-xs text-slate-600 font-bold" id="clock">00:00:00</div>
            </header>

            <!-- Content Area -->
            <main class="flex-grow flex flex-col justify-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <!-- Left: Advanced Typing Terminal -->
                    <div class="order-2 lg:order-1">
                        <!-- The Typing Area -->
                        <div class="min-h-[160px] text-xl md:text-4xl leading-tight font-bold text-slate-100 mb-1">
                            <span class="text-neon-blue mr-2">></span><span id="typewriter" class="glow-text"></span><span class="cursor-blink inline-block w-3 h-8 bg-neon-blue ml-1 align-middle shadow-[0_0_10px_#00f3ff]"></span>
                        </div>
                        
                        <div id="sub-text" class="text-slate-400 text-sm md:text-base leading-7 mb-10  opacity-0 transition-opacity duration-1000 border-l-2 border-slate-800 pl-4">
                            <!-- Secondary text fades in here -->
                        </div>

                        <!-- Interactive Command Buttons -->
                        <div id="controls" class="flex flex-wrap gap-4  opacity-0 transition-all duration-1000 transform translate-y-4">
                            <a href="{{route("project")}}" class="group relative px-6 py-3 max-sm:px-3  max-sm:py-2 bg-slate-900/50 border border-neon-blue/30 text-neon-blue rounded hover:bg-neon-blue/10 transition-all overflow-hidden backdrop-blur-sm">
                                <span class="absolute inset-0 w-full h-full bg-neon-blue/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                                <span class="relative flex items-center gap-3  max-sm:text-[10px] font-bold">
                                    [ ./projects]
                                </span>
                            </a>
                            <a href="{{route("contact")}}" class="group relative px-6 py-3 max-sm:px-3  max-sm:py-2 bg-slate-900/50 border border-slate-700 text-slate-400 rounded hover:border-slate-500 hover:text-slate-200 transition-all backdrop-blur-sm">
                                <span class="relative flex items-center  max-sm:text-[10px] gap-3">
                                    [ ./contact_me ]
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Abstract HUD Visual -->
                    <div class="order-1 lg:order-2 flex justify-center lg:justify-end opacity-0 transition-opacity duration-1000" id="visual-hud">
                        <div class="relative w-64 h-64 md:w-80 md:h-80 flex items-center justify-center">
                            <!-- Glowing Core -->
                            <div class="absolute inset-0 bg-neon-blue/10 blur-[80px] rounded-full animate-pulse"></div>
                            <!-- Rotating Rings -->
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-full h-full text-slate-700 animate-spin-slow">
                                <circle cx="100" cy="100" r="90" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="4 4" />
                                <circle cx="100" cy="100" r="60" fill="none" stroke="currentColor" stroke-width="0.5" />
                                <path d="M100 20 L100 0 M100 180 L100 200 M20 100 L0 100 M180 100 L200 100" stroke="#00f3ff" stroke-width="2" />
                            </svg>
                            <!-- Inner Ring Reverse -->
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-full h-full text-slate-600 animate-[spin_15s_linear_infinite_reverse]">
                                <circle cx="100" cy="100" r="75" fill="none" stroke="currentColor" stroke-width="1" stroke-dasharray="40 100" />
                            </svg>
                            
                            <!-- ADDED IMAGE HERE -->
                            <div class="absolute z-10 w-40 h-40 rounded-full overflow-hidden border-2 border-neon-blue/50 shadow-[0_0_15px_rgba(0,243,255,0.3)]">
                                <img src="{{asset("storage/image/adams.jpg")}}" alt="Profile" class="w-full h-full object-cover opacity-90 hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        
        <div class="scanline"></div>
    </div>

    <script>
       

       
        // 1. Mouse Spotlight Effect
        const spotlight = document.getElementById('spotlight');
        document.addEventListener('mousemove', (e) => {
            if(spotlight) {
                spotlight.style.opacity = '1';
                document.documentElement.style.setProperty('--mouse-x', e.clientX + 'px');
                document.documentElement.style.setProperty('--mouse-y', e.clientY + 'px');
            }
        });
 
        // 2. Clock
        setInterval(() => {
            const now = new Date();
            const clock = document.getElementById('clock');
            if(clock) {
                clock.innerText = now.toISOString().split('T')[1].split('.')[0] + " UTC";
            }
        }, 1000);

        // 2. Advanced Typing Sequence
        const mainText = "Building scalable web-based systems.";
        const subTextHTML = "Full Stack Developer <span class='text-slate-600'>//</span> PHP & Laravel <br> Specialized in <span class='text-neon-blue'>clean back-end logic</span> and <span class='text-neon-green'>seamless user experiences.</span>.";
        
        // Flag to prevent duplicate animations from running simultaneously
        let isAnimationRunning = false;
        
        // Function to initialize typing animation
        async function typeSequence() {
            // Prevent animation from running multiple times at once
            if(isAnimationRunning) return;
            isAnimationRunning = true;

            // Get fresh references to DOM elements each time
            const typeWriter = document.getElementById('typewriter');
            const subTextDiv = document.getElementById('sub-text');
            const controls = document.getElementById('controls');
            const header = document.getElementById('header-bar');
            const hud = document.getElementById('visual-hud');

            // Reset elements to their initial state
            if(typeWriter) {
                typeWriter.textContent = '';
                typeWriter.parentElement.style.opacity = '1';
            }
            if(subTextDiv) {
                subTextDiv.innerHTML = '';
                subTextDiv.classList.add('opacity-0');
            }
            if(controls) {
                controls.classList.add('opacity-0', 'translate-y-4');
            }

            // Reveal UI elements first
            if(header) header.classList.remove('opacity-0');
            if(hud) hud.classList.remove('opacity-0');
            
            await new Promise(r => setTimeout(r, 800));

            // Type Main Headline
            if(typeWriter) {
                for (let i = 0; i < mainText.length; i++) {
                    typeWriter.textContent += mainText.charAt(i);
                    await new Promise(r => setTimeout(r, 50 + Math.random() * 30));
                }
            }

            await new Promise(r => setTimeout(r, 500));

            // Reveal Subtext and Controls
            if(subTextDiv) {
                subTextDiv.innerHTML = subTextHTML;
                subTextDiv.classList.remove('opacity-0');
            }
            
            await new Promise(r => setTimeout(r, 400));
            if(controls) controls.classList.remove('opacity-0', 'translate-y-4');
            
            // Mark animation as complete
            isAnimationRunning = false;
        }

        // Fire animation on initial page load
        if(document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', typeSequence);
        } else {
            typeSequence();
        }

        // Also listen for Livewire navigation events to restart animation
        document.addEventListener('livewire:navigated', typeSequence);
         
    </script>


</div>
