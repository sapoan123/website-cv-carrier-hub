<section id="home" class="relative min-h-screen flex items-center overflow-hidden animate-section"
    x-data="{ i: 0 }"
    x-init="setInterval(() => { i = (i + 1) % 3 }, 5000)">

    <img src="/images/hero/hero-1.jpg" alt="Hero"
        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700"
        :class="i === 0 ? 'opacity-100' : 'opacity-0'">
    <img src="/images/hero/hero-2.jpg" alt="Hero"
        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700"
        :class="i === 1 ? 'opacity-100' : 'opacity-0'">
    <img src="/images/hero/hero-3.jpg" alt="Hero"
        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700"
        :class="i === 2 ? 'opacity-100' : 'opacity-0'">

    <div class="absolute inset-0 bg-gradient-to-r from-near-black/80 via-near-black/40 to-transparent"></div>

    <div class="relative z-10 w-full pt-32 pb-24 lg:pt-40 lg:pb-32">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="flex flex-col items-center text-center">
                <h1 class="font-display text-text-base font-[700] leading-[1.0] text-[clamp(2.5rem,8vw,72px)] tracking-[-0.02em]">
                    Pilih Template<br><span class="text-spotify-green">CV Impianmu</span>
                </h1>
                <p class="mt-6 text-text-secondary font-[400] leading-[1.5] text-lg max-w-2xl">
                    Koleksi template CV profesional, kreatif, dan ATS-Friendly
                </p>
                <p class="mt-4 text-text-secondary/60 leading-[1.5] max-w-xl text-sm">
                    Semua template gratis — pilih favoritmu, edit data diri, dan download CV siap pakai.
                </p>
                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="#template" class="inline-flex items-center px-[32px] py-3 bg-spotify-green text-near-black rounded-full text-sm font-[700] uppercase tracking-[1.4px] hover:bg-spotify-green-hover transition-colors">
                        Lihat Template
                    </a>
                    <a href="#contact" class="inline-flex items-center px-[32px] py-3 bg-mid-dark text-text-base rounded-full text-sm font-[700] uppercase tracking-[1.4px] hover:bg-dark-card transition-colors">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-2">
        <button @click="i = 0" class="w-2.5 h-2.5 rounded-full transition-all"
            :class="i === 0 ? 'bg-spotify-green w-8' : 'bg-white/40 hover:bg-white/60'"></button>
        <button @click="i = 1" class="w-2.5 h-2.5 rounded-full transition-all"
            :class="i === 1 ? 'bg-spotify-green w-8' : 'bg-white/40 hover:bg-white/60'"></button>
        <button @click="i = 2" class="w-2.5 h-2.5 rounded-full transition-all"
            :class="i === 2 ? 'bg-spotify-green w-8' : 'bg-white/40 hover:bg-white/60'"></button>
    </div>

    <button @click="i = (i - 1 + 3) % 3"
        class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 flex items-center justify-center rounded-full bg-mid-dark text-text-base hover:bg-dark-card transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </button>

    <button @click="i = (i + 1) % 3"
        class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 flex items-center justify-center rounded-full bg-mid-dark text-text-base hover:bg-dark-card transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </button>

</section>
