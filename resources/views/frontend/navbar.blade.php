<nav class="fixed top-0 left-0 right-0 z-50 bg-near-black" x-data="{ mobileOpen: false }">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="#home" class="font-display text-text-base text-xl font-[700] tracking-[0px]">
                CVHub<span class="text-spotify-green">Career</span>
            </a>

            <div class="hidden lg:flex items-center gap-6">
                <div class="flex items-center gap-5">
                    <a href="#home" class="text-sm font-[700] text-text-base hover:text-spotify-green transition-colors">Home</a>
                    <a href="#keunggulan" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Keunggulan</a>
                    <a href="#template" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Daftar Template</a>
                    <a href="#cara-membuat-cv" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Cara Membuat CV</a>
                    <a href="#testimoni" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Testimoni</a>
                    <a href="#faq" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">FAQ</a>
                    <a href="#tentang" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Tentang</a>
                    <a href="#contact" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Contact</a>
                </div>
                <a href="{{ route('admin.login') }}" class="inline-flex items-center px-[26px] py-3 bg-mid-dark text-text-base rounded-full text-sm font-[700] uppercase tracking-[1.4px] hover:bg-dark-card transition-colors">
                    Dashboard
                </a>
            </div>

            <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 text-text-base">
                <svg class="w-6 h-6" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div x-show="mobileOpen" x-cloak class="lg:hidden pb-6 border-t border-border-gray pt-4">
            <div class="flex flex-col gap-3">
                <a href="#home" class="text-sm font-[700] text-text-base hover:text-spotify-green transition-colors">Home</a>
                <a href="#keunggulan" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Keunggulan</a>
                <a href="#template" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Daftar Template</a>
                <a href="#cara-membuat-cv" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Cara Membuat CV</a>
                <a href="#testimoni" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Testimoni</a>
                <a href="#faq" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">FAQ</a>
                <a href="#tentang" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Tentang</a>
                <a href="#contact" class="text-sm font-[400] text-text-secondary hover:text-text-base transition-colors">Contact</a>
                <div class="flex gap-3 mt-2 pt-4 border-t border-border-gray">
                    <a href="{{ route('admin.login') }}" class="flex-1 text-center px-[26px] py-3 bg-mid-dark text-text-base rounded-full text-sm font-[700] uppercase tracking-[1.4px] hover:bg-dark-card transition-colors">
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
