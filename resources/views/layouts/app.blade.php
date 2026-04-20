<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', '@') }}</title> 
            <script src="https://cdn.tailwindcss.com"></script>
                  <!-- ------AOS link -------- -->
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
             <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                     <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
        <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            fontFamily: {
                                sans: ['Inter', 'sans-serif'],
                            },
                            colors: {
                                primary: '#0f172a', // Slate 900
                                accent: '#0ea5e9', // Sky 500
                            }
                        }
                    }
                }
        </script>

        <style>
            /* Sidebar Transitions */
            .sidebar-transition { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
            .overlay-transition { transition: opacity 0.3s ease-in-out, visibility 0.3s; }
        </style>

</head>
<body class="bg-gray-50 text-slate-800 font-sans flex flex-col min-h-screen">



    <!-- ======== Header =========== -->
    @include('layouts.includes.header')


    <!-- Main Content Area (Empty as requested) -->
    <main class="flex-grow pt-24 pb-12 px-4">
        {{$slot}}
    </main>



    <!-- ======== Footer =========== -->
    @include('layouts.includes.footer')

    <script>
        // Simple Mobile Menu Toggle - works with onclick handlers in HTML
        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            
            if (!sidebar || !overlay) return;
            
            const isClosed = sidebar.classList.contains('-translate-x-full');
            
            if (isClosed) {
                // Open menu
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('opacity-0', 'invisible');
            } else {
                // Close menu
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('opacity-0', 'invisible');
            }
        }
        
        // Attach click listener to menu button on page load
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            if (btn) {
                btn.addEventListener('click', toggleMenu);
            }
        });
    
    </script>

    <!-- Online/Offline Status Indicator -->
    @include('status/online-offline-status-indicator')
</body>
</html>
