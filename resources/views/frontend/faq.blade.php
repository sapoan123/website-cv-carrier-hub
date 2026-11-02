<section id="faq" class="py-24 lg:py-28 bg-dark-surface animate-section">
    <div class="max-w-[840px] mx-auto px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="font-display text-text-base font-[700] leading-[1.1] text-[clamp(1.8rem,4vw,36px)] tracking-[-0.02em]">
                FAQ
            </h2>
            <p class="mt-3 text-text-secondary text-sm leading-[1.5] max-w-xl mx-auto">
                Pertanyaan yang sering diajukan tentang template CV
            </p>
        </div>

        @if(isset($faqs) && $faqs->count() > 0)
            <div class="mt-12 space-y-3">
                @foreach($faqs as $index => $item)
                    <div class="group relative bg-mid-dark rounded-[8px] overflow-hidden transition-all duration-300 hover:bg-dark-card hover:shadow-[0_8px_30px_-12px_rgba(30,215,96,0.15)]" 
                         x-data="{ open: false }" 
                         style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px; border-left: 3px solid transparent;">
                        
                        <!-- Background gradient effect pada hover -->
                        <div class="absolute inset-0 bg-gradient-to-r from-spotify-green/0 via-spotify-green/0 to-spotify-green/0 group-hover:from-spotify-green/5 group-hover:via-spotify-green/3 group-hover:to-spotify-green/0 transition-all duration-500 pointer-events-none"></div>
                        
                        <button @click="open = !open" class="relative w-full px-5 py-4 flex items-center justify-between text-left gap-4 cursor-pointer">
                            <div class="flex items-center gap-3 flex-1 min-w-0">
                                <!-- Icon pertanyaan -->
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-spotify-green/10 flex items-center justify-center transition-all duration-300 group-hover:bg-spotify-green/20 group-hover:scale-110">
                                    <svg class="w-4 h-4 text-spotify-green" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <span class="text-text-base font-[700] text-[14px] leading-[1.3] transition-all duration-300 group-hover:text-spotify-green">
                                    {{ $item->question }}
                                </span>
                            </div>
                            <div class="flex-shrink-0 ml-2">
                                <!-- Icon Chevron Down (saat tertutup) -->
                                <svg x-show="!open" class="w-5 h-5 text-spotify-green transition-all duration-300 group-hover:rotate-180 group-hover:scale-110" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                                <!-- Icon Chevron Up (saat terbuka) -->
                                <svg x-show="open" class="w-5 h-5 text-spotify-green transition-all duration-300 rotate-180" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </button>
                        
                        <!-- Jawaban -->
                        <div x-show="open" x-collapse.duration.300ms class="relative px-5 pb-4">
                            <div class="flex items-start gap-3">
                                <div class="w-0.5 h-auto min-h-[24px] bg-gradient-to-b from-spotify-green to-spotify-green/30 rounded-full flex-shrink-0 mt-1"></div>
                                <p class="text-text-secondary text-[14px] font-[400] leading-[1.6]">
                                    {{ $item->answer }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mt-12 space-y-3">
                @foreach([
                    ['Apakah template ini gratis?', 'Ya, semua template CV gratis 100%! Download dan pakai tanpa biaya, tanpa perlu bayar.'],
                    ['Format apa saja yang tersedia?', 'Template tersedia dalam format Word (.docx) dan PDF yang siap edit dan cetak.'],
                    ['Apakah template ATS Friendly?', 'Ya, semua template kami dioptimalkan agar kompatibel dengan sistem ATS perusahaan.'],
                    ['Bagaimana cara mengedit template?', 'Kamu tinggal download template, buka di Microsoft Word atau Google Docs, lalu ganti data diri.'],
                    ['Apakah ada template untuk fresh graduate?', 'Tentu! Kami menyediakan kategori khusus Fresh Graduate dengan desain yang cocok untuk pemula karir.'],
                ] as $index => $item)
                    <div class="group relative bg-mid-dark rounded-[8px] overflow-hidden transition-all duration-300 hover:bg-dark-card hover:shadow-[0_8px_30px_-12px_rgba(30,215,96,0.15)]" 
                         x-data="{ open: false }" 
                         style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px; border-left: 3px solid transparent;">
                        
                        <!-- Background gradient effect pada hover -->
                        <div class="absolute inset-0 bg-gradient-to-r from-spotify-green/0 via-spotify-green/0 to-spotify-green/0 group-hover:from-spotify-green/5 group-hover:via-spotify-green/3 group-hover:to-spotify-green/0 transition-all duration-500 pointer-events-none"></div>
                        
                        <button @click="open = !open" class="relative w-full px-5 py-4 flex items-center justify-between text-left gap-4 cursor-pointer">
                            <div class="flex items-center gap-3 flex-1 min-w-0">
                                <!-- Icon pertanyaan -->
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-spotify-green/10 flex items-center justify-center transition-all duration-300 group-hover:bg-spotify-green/20 group-hover:scale-110">
                                    <svg class="w-4 h-4 text-spotify-green" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <span class="text-text-base font-[700] text-[14px] leading-[1.3] transition-all duration-300 group-hover:text-spotify-green">
                                    {{ $item[0] }}
                                </span>
                            </div>
                            <div class="flex-shrink-0 ml-2">
                                <!-- Icon Chevron Down (saat tertutup) -->
                                <svg x-show="!open" class="w-5 h-5 text-spotify-green transition-all duration-300 group-hover:rotate-180 group-hover:scale-110" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                                <!-- Icon Chevron Up (saat terbuka) -->
                                <svg x-show="open" class="w-5 h-5 text-spotify-green transition-all duration-300 rotate-180" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </button>
                        
                        <!-- Jawaban -->
                        <div x-show="open" x-collapse.duration.300ms class="relative px-5 pb-4">
                            <div class="flex items-start gap-3">
                                <div class="w-0.5 h-auto min-h-[24px] bg-gradient-to-b from-spotify-green to-spotify-green/30 rounded-full flex-shrink-0 mt-1"></div>
                                <p class="text-text-secondary text-[14px] font-[400] leading-[1.6]">
                                    {{ $item[1] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>