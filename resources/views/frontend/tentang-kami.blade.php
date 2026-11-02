<section id="tentang" class="py-24 lg:py-28 bg-near-black animate-section">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="flex-1">
                <div class="w-full aspect-4/3 bg-dark-surface rounded-[8px] flex items-center justify-center overflow-hidden" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                    @if($about && $about->photo)
                        <img src="{{ asset('storage/' . $about->photo) }}" alt="{{ $about->title }}" class="w-full h-full object-cover">
                    @else
                        <svg class="w-32 h-32 text-text-secondary/30" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"/>
                        </svg>
                    @endif
                </div>
            </div>
            <div class="flex-1">
                @if($about)

                    <h2 class="font-display text-text-base font-[700] leading-[1.1] text-[clamp(1.8rem,4vw,36px)] tracking-[-0.02em]">
                        {{ $about->title }}
                    </h2>
                    <div class="mt-4 space-y-3 text-text-secondary text-[14px] font-[400] leading-[1.6]">
                        <p>{{ $about->description }}</p>
                    </div>
                    @if($about->vision || $about->mission)
                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @if($about->vision)
                                <div class="bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                                    <h3 class="font-display text-text-base font-[700] text-[16px] leading-[1.3] mb-1">Visi</h3>
                                    <p class="text-text-secondary text-[14px] font-[400] leading-[1.5]">{{ $about->vision }}</p>
                                </div>
                            @endif
                            @if($about->mission)
                                <div class="bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                                    <h3 class="font-display text-text-base font-[700] text-[16px] leading-[1.3] mb-1">Misi</h3>
                                    <p class="text-text-secondary text-[14px] font-[400] leading-[1.5]">{{ $about->mission }}</p>
                                </div>
                            @endif
                        </div>
                    @endif
                @else

                    <h2 class="font-display text-text-base font-[700] leading-[1.1] text-[clamp(1.8rem,4vw,36px)] tracking-[-0.02em]">
                        Koleksi Template CV
                    </h2>
                    <div class="mt-4 space-y-3 text-text-secondary text-[14px] font-[400] leading-[1.6]">
                        <p>CVHub Career menyediakan berbagai pilihan template CV profesional yang siap pakai — gratis. Dari desain klasik hingga modern, semua template dirancang untuk membantu Anda tampil beda di mata recruiter.</p>
                        <p>Setiap template kami buat dengan memperhatikan standar ATS dan tren desain terkini. Tinggal pilih, edit, dan download — gratis, tanpa perlu keahlian desain.</p>
                    </div>
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                            <h3 class="font-display text-text-base font-[700] text-[16px] leading-[1.3] mb-1">Visi</h3>
                            <p class="text-text-secondary text-[14px] font-[400] leading-[1.5]">Menjadi platform template CV terpercaya yang membantu setiap individu tampil percaya diri dalam melamar kerja.</p>
                        </div>
                        <div class="bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                            <h3 class="font-display text-text-base font-[700] text-[16px] leading-[1.3] mb-1">Misi</h3>
                            <p class="text-text-secondary text-[14px] font-[400] leading-[1.5]">Menyediakan koleksi template CV berkualitas tinggi yang mudah diakses dan digunakan oleh semua kalangan.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
