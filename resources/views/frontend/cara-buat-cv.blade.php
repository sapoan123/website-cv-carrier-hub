<section
    id="cara-membuat-cv"
    class="relative py-12 lg:py-16 bg-dark-surface animate-section overflow-hidden"
>
    <div class="relative z-10 max-w-[1200px] mx-auto px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="font-display text-text-base font-[700] leading-[1.1] text-[clamp(1.5rem,3.5vw,32px)] tracking-[-0.03em]">
                Cara Buat CV
            </h2>
            <p class="mt-2 text-text-secondary text-[14px] leading-[1.6] max-w-lg mx-auto">
                4 langkah sederhana untuk membuat CV profesional
            </p>
        </div>

        @php
        $defaultIcons = [
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>',
        ];
        $defaultTitleIcons = [
            '<svg class="w-4 h-4 text-spotify-green/40" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.5 12.75l6 6 9-13.5"/></svg>',
            '<svg class="w-4 h-4 text-spotify-green/40" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/></svg>',
            '<svg class="w-4 h-4 text-spotify-green/40" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>',
            '<svg class="w-4 h-4 text-spotify-green/40" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>',
            '<svg class="w-4 h-4 text-spotify-green/40" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>',
        ];

        $steps = $caraBuatCvSteps->map(function ($item, $index) use ($defaultIcons, $defaultTitleIcons) {
            return [
                'num' => $item->num,
                'title' => $item->title,
                'desc' => $item->description,
                'icon' => !empty($item->icon) ? $item->icon : $defaultIcons[$index % count($defaultIcons)],
                'title_icon' => !empty($item->title_icon) ? $item->title_icon : $defaultTitleIcons[$index % count($defaultTitleIcons)],
                'img' => $item->image ?? $item->img ?? null,
            ];
        })->toArray();
        @endphp

        <div class="mt-8 lg:mt-10 relative">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative">
                
                @foreach($steps as $i => $step)
                    <div class="step-item group relative flex flex-col items-center text-center p-5 bg-mid-dark rounded-[8px] transition-all duration-300 hover:bg-dark-card hover:scale-[1.02] hover:-translate-y-0.5 z-10" 
                         style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px; border: 1px solid rgba(255,255,255,0.03); opacity:0; transform:translateY(14px); transition:opacity .5s cubic-bezier(.4,0,.2,1) {{ $i * 0.08 }}s,transform .5s cubic-bezier(.4,0,.2,1) {{ $i * 0.08 }}s;">
                        
                        <!-- Background gradient effect pada hover -->
                        <div class="absolute inset-0 rounded-[8px] bg-gradient-to-br from-spotify-green/0 via-spotify-green/0 to-spotify-green/0 group-hover:from-spotify-green/5 group-hover:via-spotify-green/3 group-hover:to-spotify-green/0 transition-all duration-500 pointer-events-none"></div>
                        
                        <!-- Bulatan utama -->
                        <div class="relative z-10">
                            <!-- Background circle - WARNA HIJAU -->
                            <div class="relative w-20 h-20 lg:w-24 lg:h-24 rounded-full bg-dark-card flex items-center justify-center transition-all duration-500 group-hover:scale-110 group-hover:shadow-[0_0_40px_-10px_rgba(30,215,96,0.5)] overflow-hidden" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px; border: 3px solid rgba(30,215,96,0.3);">
                                
                                <!-- Inner gradient effect -->
                                <div class="absolute inset-0 rounded-full bg-gradient-to-br from-white/20 to-transparent opacity-50"></div>
                                
                                <!-- Icon di dalam bulatan - WARNA HIJAU -->
                                <span class="w-7 h-7 lg:w-8 lg:h-8 text-near-black transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6 relative z-10">
                                    {!! $step['icon'] !!}
                                </span>
                            </div>
                            
                            <!-- Nomor step di bawah bulatan -->
                            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap">
                                <span class="text-[11px] lg:text-[12px] font-bold text-spotify-green/60 group-hover:text-spotify-green transition-all duration-300">
                                    {{ $step['num'] }}
                                </span>
                            </div>
                            
                            <!-- Pulse ring animation -->
                            <div class="absolute inset-0 rounded-full border-2 border-spotify-green/0 group-hover:border-spotify-green/40 animate-pulse transition-all duration-500"></div>
                        </div>

                        <!-- Konten di bawah bulatan -->
                        <div class="mt-8">
                            <h3 class="font-display text-text-base font-[700] text-[10px] lg:text-[11px] leading-[1.3] tracking-[-0.01em] transition-all duration-500 group-hover:text-spotify-green inline-flex items-center gap-2">
                                {{ $step['title'] }}
                                <span class="transition-transform duration-300 group-hover:translate-x-0.5">{!! $step['title_icon'] !!}</span>
                            </h3>
                            <p class="mt-1 text-text-secondary text-[9px] lg:text-[10px] font-[400] leading-[1.4] line-clamp-2">
                                {{ $step['desc'] }}
                            </p>
                        </div>

                        <!-- Icon panah di bawah -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-1 group-hover:translate-y-0">
                            <svg class="w-4 h-4 text-spotify-green" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var items = entry.target.querySelectorAll('.step-item');
                    items.forEach(function (item) {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        var section = document.getElementById('cara-membuat-cv');
        if (section) observer.observe(section);
    });
</script>