<div>

    {{-- Tailwind, Alpine and Custom Config --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
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
                        'typing': 'typing 2s steps(22), blink .5s step-end infinite alternate',
                    },
                    keyframes: {
                        typing: {
                          'from': { width: '0' }
                        },
                        blink: {
                          '50%': { 'border-color': 'transparent' }
                        }
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
        
        <!-- Background Effects -->
        <div id="spotlight-contact" class="absolute inset-0 z-0 pointer-events-none transition-opacity duration-500 opacity-0" 
             style="background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(0, 243, 255, 0.06), transparent 80%);">
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
                <div class="text-xs text-slate-600 font-bold" id="clock-contact">00:00:00</div>
            </header>



            <!-- Main Grid: Creates two equal-width columns on large screens -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">

                <!-- Left Column: Contact Form -->
                 @include('livewire.contact.form')

                <!-- Right Column: Social Icons and Contact Info - Balanced with left column -->
                @include('livewire.contact.media')

            </div>

        </div>
        
        <div class="scanline"></div>
    </div>

    <script>
        // Spotlight
        const spotlightContact = document.getElementById('spotlight-contact');
        document.addEventListener('mousemove', (e) => {
            if(spotlightContact) {
                spotlightContact.style.opacity = '1';
                spotlightContact.style.setProperty('--mouse-x', e.pageX + 'px');
                spotlightContact.style.setProperty('--mouse-y', e.pageY + 'px');
            }
        });

        // Clock
        setInterval(() => {
            const now = new Date();
            const clock = document.getElementById('clock-contact');
            if(clock) {
                clock.innerText = now.toISOString().split('T')[1].split('.')[0] + " UTC";
            }
        }, 1000);

        // Alpine Data for Chat
        document.addEventListener('alpine:init', () => {
            Alpine.data('contactChat', () => ({
                showForm: false,
                messages: [
                    { role: 'client', text: "We need a developer who can deliver clean, efficient, and scalable web applications." },
                    { role: 'me', text: "I can help with that. I specialize in building modern web apps with clean, maintainable code." },
                    { role: 'client', text: "Also, we need someone who can implement real-time features and interactive UI." },
                    { role: 'me', text: "Absolutely. I work with Livewire, Laravel, and modern front-end tools to make that seamless." },
                    { role: 'client', text: "Great! How can we get started?" },
                    { role: 'me', text: "Please use the form below to share your requirements, and I’ll get back to you promptly.", action: true }
                ],
                visibleMessages: [],
                isTyping: false,
                
                init() {
                    this.startTyping();
                },
                
                async startTyping() {
                    for (const message of this.messages) {
                        if (this.showForm) break;
                        this.isTyping = true;
                        this.visibleMessages.push({ ...message, displayedText: '' });
                        let currentIndex = this.visibleMessages.length - 1;
                        await this.typeText(currentIndex, message.text);
                        this.isTyping = false;
                        await new Promise(resolve => setTimeout(resolve, 800));
                    }
                },
                
                typeText(index, text) {
                    return new Promise(resolve => {
                        let i = 0;
                        let interval = setInterval(() => {
                            this.visibleMessages[index].displayedText += text.charAt(i);
                            i++;
                            if (i >= text.length) {
                                clearInterval(interval);
                                resolve();
                            }
                        }, 30);
                    });
                }
            }))
        })
    </script>
</div>
