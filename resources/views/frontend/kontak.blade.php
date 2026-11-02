<section id="contact" class="py-24 lg:py-28 bg-dark-surface animate-section">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">

            <h2 class="font-display text-text-base font-[700] leading-[1.1] text-[clamp(1.8rem,4vw,36px)] tracking-[-0.02em]">
                Hubungi Kami
            </h2>
            <p class="mt-3 text-text-secondary text-sm leading-[1.5] max-w-xl mx-auto">
                Silahkan hubungi kami untuk konsultasi gratis atau pertanyaan lebih lanjut
            </p>
        </div>

        <div class="mt-12 max-w-3xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-4">
            @if(isset($contact) && $contact)
                @if($contact->address)
                    <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                        <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                            <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">Alamat</p>
                            <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">{{ $contact->address }}</p>
                        </div>
                    </div>
                @endif
                @if($contact->email)
                    <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                        <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                            <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">Email</p>
                            <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">{{ $contact->email }}</p>
                        </div>
                    </div>
                @endif
                @if($contact->whatsapp)
                    <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                        <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                            <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">WhatsApp</p>
                            <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">{{ $contact->whatsapp }}</p>
                        </div>
                    </div>
                @endif
                @if($contact->operational_hours)
                    <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                        <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                            <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">Jam Operasional</p>
                            <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">{{ $contact->operational_hours }}</p>
                        </div>
                    </div>
                @endif
            @else
                <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                    <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                        <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">Alamat</p>
                        <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">Jl. Contoh No. 123, Jakarta</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                    <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                        <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">Email</p>
                        <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">hello@cvhubcareer.com</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                    <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                        <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">WhatsApp</p>
                        <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start bg-mid-dark rounded-[8px] p-5" style="box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
                    <div class="w-11 h-11 rounded-full bg-spotify-green/15 flex items-center justify-center shrink-0 text-spotify-green">
                        <svg class="w-5 h-5" fill="none" stroke="#1DB954" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-display text-text-base font-[700] text-[14px] leading-[1.3]">Jam Operasional</p>
                        <p class="text-text-secondary text-[14px] font-[400] leading-[1.5] mt-1">Senin - Jumat: 09:00 - 18:00</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
