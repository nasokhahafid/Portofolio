<nav class="bg-navy-900/20 shadow-xl border-b border-navy-800/20 sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="#home" class="text-2xl font-bold text-slate-100 tracking-tight hover:text-gold-400 transition-colors duration-300">
                    <span class="text-gold-500">P</span>ortofolio<span class="text-gold-500">.</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-slate-300 hover:text-gold-400 px-3 py-2 text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">Home</a>
                <a href="#about" class="text-slate-300 hover:text-gold-400 px-3 py-2 text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">About</a>
                <a href="#experience" class="text-slate-300 hover:text-gold-400 px-3 py-2 text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">Experience</a>
                <a href="#skills" class="text-slate-300 hover:text-gold-400 px-3 py-2 text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">Skills</a>
                <a href="#certificates" class="text-slate-300 hover:text-gold-400 px-3 py-2 text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">Certificates</a>
                <a href="#contact" class="px-6 py-2 bg-gold-500 text-navy-900 rounded-full font-bold text-sm hover:bg-gold-400 transform hover:scale-105 transition-all duration-300 shadow-lg shadow-gold-500/20">
                    Contact Me
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="text-slate-300 hover:text-gold-400 focus:outline-none p-2" aria-controls="mobile-menu" aria-expanded="false">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="md:hidden hidden bg-navy-800 border-t border-navy-700" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="text-slate-300 hover:text-gold-400 block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="#about" class="text-slate-300 hover:text-gold-400 block px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="#experience" class="text-slate-300 hover:text-gold-400 block px-3 py-2 rounded-md text-base font-medium">Experience</a>
            <a href="#skills" class="text-slate-300 hover:text-gold-400 block px-3 py-2 rounded-md text-base font-medium">Skills</a>
            <a href="#certificates" class="text-slate-300 hover:text-gold-400 block px-3 py-2 rounded-md text-base font-medium">Certificates</a>
            <a href="#contact" class="text-navy-900 bg-gold-500 hover:bg-gold-400 block px-3 py-2 rounded-md text-base font-bold mt-4 text-center">Contact Me</a>
        </div>
    </div>
</nav>

<script>
    // Simple toggle for mobile menu
    const btn = document.querySelector('button[aria-controls="mobile-menu"]');
    const menu = document.querySelector('#mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
