<footer class="bg-near-black text-text-base py-16 lg:py-20 px-6 lg:px-8 animate-section" style="box-shadow: rgba(0,0,0,0.5) 0px -8px 24px;">
    <div class="max-w-[1440px] mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <div class="lg:col-span-2">
                @if(isset($footer) && $footer)
                    <h3 class="font-display text-text-base text-xl font-[700]">
                        @if($footer->logo)
                            <img src="{{ asset('storage/' . $footer->logo) }}" alt="CVHub Career" class="h-8">
                        @else
                            CVHub<span class="text-spotify-green">Career</span>
                        @endif
                    </h3>
                    @if($footer->description)
                        <p class="mt-4 text-sm text-text-secondary leading-[1.5] max-w-sm">
                            {{ $footer->description }}
                        </p>
                    @endif
                @else
                    <h3 class="font-display text-text-base text-xl font-[700]">
                        CVHub<span class="text-spotify-green">Career</span>
                    </h3>
                    <p class="mt-4 text-sm text-text-secondary leading-[1.5] max-w-sm">
                        Platform koleksi template CV profesional gratis. Pilih, edit, dan download CV impianmu tanpa biaya.
                    </p>
                @endif

                @if(isset($footer) && $footer && $footer->socialMedia->count() > 0)
                    <div class="mt-6 flex gap-3">
                        @foreach($footer->socialMedia as $social)
                            <a href="{{ $social->url }}" target="_blank" class="w-9 h-9 rounded-full bg-mid-dark flex items-center justify-center text-text-secondary hover:bg-spotify-green hover:text-near-black transition-all duration-300">
                                <span class="text-xs font-[700] uppercase">{{ substr($social->platform, 0, 2) }}</span>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="w-9 h-9 rounded-full bg-mid-dark flex items-center justify-center text-text-secondary hover:bg-spotify-green hover:text-near-black transition-all duration-300">
                            <span class="text-xs font-[700] uppercase">IG</span>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-mid-dark flex items-center justify-center text-text-secondary hover:bg-spotify-green hover:text-near-black transition-all duration-300">
                            <span class="text-xs font-[700] uppercase">LI</span>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-mid-dark flex items-center justify-center text-text-secondary hover:bg-spotify-green hover:text-near-black transition-all duration-300">
                            <span class="text-xs font-[700] uppercase">YT</span>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-mid-dark flex items-center justify-center text-text-secondary hover:bg-spotify-green hover:text-near-black transition-all duration-300">
                            <span class="text-xs font-[700] uppercase">FB</span>
                        </a>
                    </div>
                @endif
            </div>

            <div>
                <h4 class="text-sm font-[700] text-text-base uppercase tracking-[1.4px] mb-5">Quick Links</h4>
                @if(isset($footer) && $footer && $footer->quickLinks->count() > 0)
                    <ul class="space-y-2">
                        @foreach($footer->quickLinks as $link)
                            <li>
                                <a href="{{ $link->url }}" class="text-sm text-text-secondary font-[400] hover:text-text-base transition-colors leading-[1.5]">{{ $link->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-sm text-text-secondary font-[400] hover:text-text-base transition-colors leading-[1.5]">Home</a></li>
                        <li><a href="#tentang" class="text-sm text-text-secondary font-[400] hover:text-text-base transition-colors leading-[1.5]">Tentang</a></li>
                        <li><a href="#template" class="text-sm text-text-secondary font-[400] hover:text-text-base transition-colors leading-[1.5]">Template</a></li>
                        <li><a href="#testimoni" class="text-sm text-text-secondary font-[400] hover:text-text-base transition-colors leading-[1.5]">Testimoni</a></li>
                        <li><a href="#contact" class="text-sm text-text-secondary font-[400] hover:text-text-base transition-colors leading-[1.5]">Kontak</a></li>
                    </ul>
                @endif
            </div>

            <div>
                <h4 class="text-sm font-[700] text-text-base uppercase tracking-[1.4px] mb-5">Kontak</h4>
                @if(isset($contact) && $contact)
                    <ul class="space-y-2 text-sm text-text-secondary font-[400] leading-[1.5]">
                        @if($contact->email)
                            <li>{{ $contact->email }}</li>
                        @endif
                        @if($contact->whatsapp)
                            <li>{{ $contact->whatsapp }}</li>
                        @endif
                        @if($contact->address)
                            <li class="leading-[1.5]">{{ $contact->address }}</li>
                        @endif
                    </ul>
                @else
                    <ul class="space-y-2 text-sm text-text-secondary font-[400] leading-[1.5]">
                        <li>hello@cvhubcareer.com</li>
                        <li>+62 812-3456-7890</li>
                        <li>Jakarta, Indonesia</li>
                    </ul>
                @endif
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-border-gray text-center text-sm text-text-secondary font-[400] leading-[1.5]">
            @if(isset($footer) && $footer && $footer->copyright)
                {{ $footer->copyright }}
            @else
                &copy; {{ date('Y') }} CVHub Career. All rights reserved.
            @endif
        </div>
    </div>
</footer>
