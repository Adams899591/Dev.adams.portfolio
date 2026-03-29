    <!-- ========= Header with Box Shadow ======== -->
    <header class="fixed w-full top-0 z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-2xl font-bold text-primary tracking-tight">
                        Portfolio<span class="text-accent">.</span>
                    </a>
                </div>

                <!-- Desktop Navigation (Hidden on Mobile) -->
                <nav class="hidden md:flex space-x-8">
                    <!-- Active Link (Home) -->
                    <a href="{{route("home")}}" class="{{request()->routeIs('home') ? 'text-accent' : 'text-slate-600' }} font-bold relative group" wire:navigate>
                        Home
                        <span class="{{ request()->routeIs('home') ? 'absolute -bottom-1 left-0 w-full h-0.5 bg-accent rounded-full' : ""}}"></span>
                    </a>
                    <!-- Other Links -->
                    <a href="{{route("project")}}" class=" {{request()->routeIs('project') ? 'text-accent' : 'text-slate-600' }} font-medium transition-colors duration-200 font-bold relative group" wire:navigate >Projects  <span class="{{ request()->routeIs('project') ? 'absolute -bottom-1 left-0 w-full h-0.5 bg-accent rounded-full' : ""}}"></span></a>
                    <a href="{{route("skills")}}" class="{{request()->routeIs('skills') ? 'text-accent' : 'text-slate-600' }} font-medium transition-colors duration-200 font-bold relative group" wire:navigate>Skills <span class="{{ request()->routeIs('skills') ? 'absolute -bottom-1 left-0 w-full h-0.5 bg-accent rounded-full' : ""}}"></span></a>
                    <a href="{{route("about")}}" class="{{request()->routeIs('about') ? 'text-accent' : 'text-slate-600' }} font-medium transition-colors duration-200 font-bold relative group" wire:navigate>About <span class="{{ request()->routeIs('about') ? 'absolute -bottom-1 left-0 w-full h-0.5 bg-accent rounded-full' : ""}}"></span></a>
                    <a href="{{route("contact")}}" class="{{request()->routeIs('contact') ? 'text-accent' : 'text-slate-600' }} font-medium transition-colors duration-200 font-bold relative group" wire:navigate>Contact <span class="{{ request()->routeIs('contact') ? 'absolute -bottom-1 left-0 w-full h-0.5 bg-accent rounded-full' : ""}}"></span></a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button id="mobile-menu-btn" type="button" class="text-slate-600 hover:text-primary focus:outline-none p-2">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Sidebar (Left Hand Side) -->
    <!-- Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 z-40 bg-black/50 opacity-0 invisible overlay-transition" onclick="toggleMenu()" wire:ignore></div>
    
    <!-- Sidebar Content - wire:ignore keeps menu state consistent during navigation -->
    <aside id="sidebar" class="fixed top-0 left-0 z-50 w-[280px] h-full bg-white shadow-2xl transform -translate-x-full sidebar-transition flex flex-col" wire:ignore>
        <div class="flex items-center justify-between h-20 px-6 border-b border-gray-100">
            <span class="text-xl font-bold text-primary">Menu</span>
            <button onclick="toggleMenu()" class="text-slate-400 hover:text-red-500 transition-colors" wire:ignore>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <!-- Active Mobile Link -->
            <a href="{{route("home")}}" class="block px-4 py-3 rounded-lg {{request()->routeIs('home') ? 'bg-accent/10 text-accent font-bold border-l-4 border-accent' : "text-slate-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors"}}" onclick="toggleMenu()">
                Home
            </a>
            <a href="{{route("project")}}" class="block px-4 py-3 rounded-lg {{request()->routeIs('project') ? 'bg-accent/10 text-accent font-bold border-l-4 border-accent' : "text-slate-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors"}}" onclick="toggleMenu()">Projects</a>
            <a href="{{route("skills")}}" class="block px-4 py-3 rounded-lg {{request()->routeIs('skills') ? 'bg-accent/10 text-accent font-bold border-l-4 border-accent' : "text-slate-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors"}}" onclick="toggleMenu()">Skills</a>
            <a href="{{route("about")}}" class="block px-4 py-3 rounded-lg {{request()->routeIs('about') ? 'bg-accent/10 text-accent font-bold border-l-4 border-accent' : "text-slate-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors"}}" onclick="toggleMenu()">About</a>
            <a href="{{route("contact")}}" class="block px-4 py-3 rounded-lg {{request()->routeIs('contact') ? 'bg-accent/10 text-accent font-bold border-l-4 border-accent' : "text-slate-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors"}}" onclick="toggleMenu()">Contact</a>
        </nav>
    </aside>
