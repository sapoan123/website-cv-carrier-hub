<section id="testimoni" class="py-24 lg:py-28 bg-near-black animate-section">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">

            <h2 class="font-display text-text-base font-[700] leading-[1.1] text-[clamp(1.8rem,4vw,36px)] tracking-[-0.02em]">
                Testimoni
            </h2>
            <p class="mt-3 text-text-secondary text-sm leading-[1.5] max-w-xl mx-auto">
                Apa kata mereka yang telah menggunakan template CV kami
            </p>
        </div>

        @if(isset($testimonials) && $testimonials->count() > 0)
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($testimonials as $item)
                    <div class="bg-mid-dark rounded-[8px] p-5 transition-all duration-300 hover:bg-dark-card" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                        <div class="flex items-center gap-1 mb-3">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-4 h-4 {{ $i <= $item->rating ? 'text-spotify-green' : 'text-border-gray' }}" fill="#1DB954" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-text-secondary text-[14px] font-[400] leading-[1.5]">"{{ $item->content }}"</p>
                        <div class="mt-4 flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-spotify-green/15 flex items-center justify-center text-spotify-green font-[700] text-sm overflow-hidden">
                                @if($item->photo)
                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" class="w-full h-full object-cover">
                                @else
                                    {{ substr($item->name, 0, 1) }}
                                @endif
                            </div>
                            <div>
                                <p class="text-sm font-[700] text-text-base leading-[1.3]">{{ $item->name }}</p>
                                @if($item->position)
                                    <p class="text-xs font-[400] text-text-secondary leading-[1.5]">{{ $item->position }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach([
                    ['Prosesnya cepat dan mudah. Tidak perlu desain dari nol, tinggal pilih template dan isi data. Sangat membantu!', 'Budi Santoso', 'Project Manager'],
                    ['Template yang ditawarkan sangat vari dan profesional. Klien saya puas dengan hasil CV yang dihasilkan.', 'Rina Melati', 'HR Consultant'],
                    ['Saya sudah coba banyak CV builder, tapi yang ini paling gampang dipakai dan hasilnya paling memuaskan!', 'Fajar Nugroho', 'Data Analyst'],
                    ['Sangat terbantu dengan fitur ATS-nya. CV saya jadi lolos seleksi otomasi di beberapa perusahaan besar.', 'Dewi Anggraini', 'Marketing Executive'],
                    ['Desainnya elegan dan profesional. Saya mendapat banyak pujian dari recruiter setelah menggunakan template ini.', 'Andi Pratama', 'Software Engineer'],
                    ['Platform terbaik untuk membuat CV. Intuitif, cepat, dan hasilnya siap kirim ke perusahaan manapun.', 'Sari Purnama', 'Content Strategist'],
                ] as $item)
                    <div class="bg-mid-dark rounded-[8px] p-5 transition-all duration-300 hover:bg-dark-card" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                        <div class="flex items-center gap-1 mb-3">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-4 h-4 text-spotify-green" fill="#1DB954" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-text-secondary text-[14px] font-[400] leading-[1.5]">"{{ $item[0] }}"</p>
                        <div class="mt-4 flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-spotify-green/15 flex items-center justify-center text-spotify-green font-[700] text-sm">
                                {{ substr($item[1], 0, 1) }}
                            </div>
                            <div>
                                <p class="text-sm font-[700] text-text-base leading-[1.3]">{{ $item[1] }}</p>
                                <p class="text-xs font-[400] text-text-secondary leading-[1.5]">{{ $item[2] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
