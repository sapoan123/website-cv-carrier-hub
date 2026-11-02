@php
    $templateImages = [
        'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1586281380113-5e81c414f585?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=400&h=300&fit=crop',
        'https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&h=300&fit=crop',
    ];

    $fallbackTemplates = [
        ['Profesional', 'Desain elegan untuk korporasi.'],
        ['Kreatif', 'Tampilan unik untuk startup.'],
        ['Modern', 'Minimalis dan terkini.'],
        ['ATS-Friendly', 'Optimal untuk sistem ATS.'],
        ['Fresh Graduate', 'Cocok untuk lulusan baru.'],
        ['Fungsional', 'Fokus pada skill.'],
        ['Eksekutif', 'Untuk posisi manajerial.'],
        ['Teknologi', 'Modern untuk bidang IT.'],
        ['Keuangan', 'Profesional untuk finance.'],
    ];

    $cardIcons = [
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM18.75 10.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM8.25 17.25a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg>',
    ];

    $iconKeywords = [
        'filetext'   => ['cv', 'curriculum', 'resume', 'profesional', 'pembuatan'],
        'search'     => ['review', 'cek', 'cek cv', 'penilaian'],
        'briefcase'  => ['karir', 'career', 'konsultasi', 'consultation', 'consult'],
        'mic'        => ['interview', 'wawancara', 'persiapan'],
        'linkedin'   => ['linkedin', 'networking', 'jaringan'],
        'barchart'   => ['ats', 'sistem', 'optimasi', 'optimization', 'applicant'],
        'trendingup' => ['pertumbuhan', 'growth', 'fresh', 'graduate', 'lulusan'],
        'users'      => ['tim', 'team', 'karyawan', 'hrd', 'manajemen'],
        'sparkles'   => ['kreatif', 'karya', 'desain', 'design'],
    ];

    $iconFallback = [
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/></svg>',
        '<svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>',
    ];

    function matchIcon($title, $cardIcons, $iconKeywords) {
        $lower = strtolower($title);
        foreach ($iconKeywords as $type => $keywords) {
            foreach ($keywords as $kw) {
                if (str_contains($lower, $kw)) {
                    $map = [
                        'filetext' => 0, 'search' => 1, 'briefcase' => 2,
                        'mic' => 3, 'linkedin' => 4, 'barchart' => 5,
                        'trendingup' => 6, 'users' => 7, 'sparkles' => 8,
                    ];
                    return $cardIcons[$map[$type]] ?? $cardIcons[0];
                }
            }
        }
        return null;
    }
@endphp

<section id="template" class="py-16 lg:py-20 bg-near-black animate-section">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="font-display text-text-base font-[700] leading-[1.1] text-[clamp(1.5rem,3.5vw,32px)] tracking-[-0.03em]">
                Pilihan Template CV
            </h2>
            <p class="mt-4 lg:mt-5 text-text-secondary text-[14px] leading-[1.6] max-w-lg mx-auto">
                Berbagai template CV siap pakai untuk setiap kebutuhan karirmu
            </p>
        </div>

        @php $tplImages = isset($services) && $services->count() > 0 ? $services : collect($fallbackTemplates); @endphp

        <div class="mt-12 lg:mt-16 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
            @foreach($tplImages as $index => $item)
                @php
                    $isDB = isset($services) && $services->count() > 0;
                    $title = $isDB ? $item->title : $item[0];
                    $desc = $isDB ? ($item->description ?? '') : $item[1];
                    $imgSrc = $isDB && $item->icon
                        ? asset('storage/' . $item->icon)
                        : $templateImages[$index % count($templateImages)];
                    $matchedIcon = matchIcon($title, $cardIcons, $iconKeywords);
                    if (!$matchedIcon) {
                        $matchedIcon = $iconFallback[$index % count($iconFallback)];
                    }
                @endphp
                <div x-data="{ liked: false }" class="group flex flex-col h-full bg-mid-dark rounded-[8px] overflow-hidden transition-all duration-300 hover:bg-dark-card hover:-translate-y-0.5" style="box-shadow: rgba(0,0,0,0.2) 0px 4px 10px; border: 1px solid rgba(255,255,255,0.04);">
                    <div class="relative w-full h-[130px] lg:h-[150px] bg-dark-card overflow-hidden rounded-t-[8px] flex-shrink-0">
                        <img src="{{ $imgSrc }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.04]" onerror="this.src='{{ $templateImages[0] }}';">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                        <button @click="liked = !liked" class="absolute top-2 right-2 w-6 h-6 rounded-full bg-black/40 backdrop-blur-sm flex items-center justify-center transition-all duration-300 hover:bg-black/60 hover:scale-110 opacity-0 group-hover:opacity-100">
                            <svg x-show="!liked" class="w-3 h-3" fill="none" stroke="#1DB954" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                            <svg x-show="liked" x-cloak class="w-3 h-3" fill="#1DB954" viewBox="0 0 24 24"><path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/></svg>
                        </button>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2 px-4 py-5 flex-1">
                        <div class="w-10 h-10 lg:w-11 lg:h-11 rounded-full bg-spotify-green/15 flex items-center justify-center flex-shrink-0 transition-colors duration-300 group-hover:bg-spotify-green/25 group-hover:shadow-[0_0_16px_-4px_rgba(29,185,84,0.3)]">
                            {!! $matchedIcon !!}
                        </div>
                        <h3 class="font-display text-white font-[700] text-[10px] lg:text-[11px] leading-[1.3] tracking-[-0.01em] line-clamp-1">{{ $title }}</h3>
                        @if(!empty($desc))
                            <p class="text-text-secondary text-[9px] lg:text-[10px] font-[400] leading-[1.4] line-clamp-2">{{ $desc }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
