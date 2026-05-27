    <!--=========== Footer ============ -->
    <footer class="bg-primary text-white pt-12 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold">Portfolio<span class="text-accent">.</span></h3>
                    <p class="text-slate-400 text-sm mt-2">Professional Web Development</p>
                </div>
                <div class="flex space-x-6">
                    <a href="https://github.com/Adams899591" class="text-slate-400 hover:text-white transition-colors">GitHub</a>
                    <a href="https://www.linkedin.com/in/usman-adams-7a5900352?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="text-slate-400 hover:text-white transition-colors">LinkedIn</a>
                    <a href="mailto:usmanadams551@gmail.com" class="text-slate-400 hover:text-white transition-colors">Email</a>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-8 pt-8 text-center md:text-left">
                <p class="text-slate-500 text-sm">&copy; {{date("Y")}} All rights reserved.</p>
            </div>
        </div>
    </footer>


     <!-----------AOS ICON-------------  -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>
  
    
<!-- --------------CSS ensure that AOS move slow-------------------- -->
<style>
  /* ---------help to slow AOS better------------- */ 
     [data-aos][data-aos][data-aos-duration= "5000"]{
        transition-duration: 5000ms;
    }
</style>