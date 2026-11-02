<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') - CVHub Career</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #121212; color: #ffffff; -webkit-font-smoothing: antialiased; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 9999px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.2); }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 9px 14px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 400;
            color: #b3b3b3;
            text-decoration: none;
            transition: all 0.15s ease;
            position: relative;
        }
        .nav-link:hover { color: #ffffff; background: rgba(255,255,255,0.07); }
        .nav-link.active { color: #ffffff; font-weight: 700; background: rgba(255,255,255,0.1); }
        .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 16px;
            background: #1ed760;
            border-radius: 0 2px 2px 0;
        }
        .nav-section {
            padding: 24px 14px 8px;
            font-size: 11px;
            font-weight: 700;
            color: #b3b3b3;
            text-transform: uppercase;
            letter-spacing: 1.4px;
        }
    </style>
</head>
<body>
    <div style="display: flex; min-height: 100vh;">

        {{-- ═══════ SIDEBAR ═══════ --}}
        <aside style="width: 260px; background: #000000; position: fixed; height: 100%; z-index: 50; display: flex; flex-direction: column; border-right: 1px solid rgba(255,255,255,0.05);">
            <div style="position: relative; z-index: 10; display: flex; flex-direction: column; height: 100%;">
                {{-- Logo --}}
                <div style="padding: 0 20px; height: 64px; display: flex; align-items: center;">
                    <a href="{{ route('admin.dashboard') }}" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
                        <span style="font-size: 15px; font-weight: 700; color: #ffffff; letter-spacing: -0.02em;">CVHub<span style="color: #1ed760;">Career</span></span>
                    </a>
                </div>

                {{-- Navigation --}}
                <nav style="flex: 1; padding: 8px 12px; overflow-y: auto;">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <svg style="width: 18px; height: 18px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>

                    <div style="border-top: 1px solid rgba(255,255,255,0.05); margin: 12px 14px;"></div>

                    <div class="nav-section">Konten</div>

                    @php
                    $navItems = [
                        ['route' => 'admin.advantage.*', 'name' => 'admin.advantage.index', 'label' => 'Keunggulan', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>'],
                        ['route' => 'admin.about.*', 'name' => 'admin.about.index', 'label' => 'About', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
                        ['route' => 'admin.service.*', 'name' => 'admin.service.index', 'label' => 'Layanan', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>'],
                        ['route' => 'admin.testimonial.*', 'name' => 'admin.testimonial.index', 'label' => 'Testimoni', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>'],
                        ['route' => 'admin.faq.*', 'name' => 'admin.faq.index', 'label' => 'FAQ', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
                        ['route' => 'admin.cara-buat-cv.*', 'name' => 'admin.cara-buat-cv.index', 'label' => 'Cara Buat CV', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>'],
                        ['route' => 'admin.contact.*', 'name' => 'admin.contact.index', 'label' => 'Kontak', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>'],
                    ];
                    @endphp

                    @foreach($navItems as $item)
                        <a href="{{ route($item['name']) }}" class="nav-link {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                            <svg style="width: 18px; height: 18px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $item['icon'] !!}</svg>
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                    <div style="border-top: 1px solid rgba(255,255,255,0.05); margin: 12px 14px;"></div>

                    <div class="nav-section">Manajemen</div>

                    @php
                    $managementItems = [
                        ['route' => 'admin.user.*', 'name' => 'admin.user.index', 'label' => 'Admin', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>'],
                    ];
                    @endphp

                    @foreach($managementItems as $item)
                        <a href="{{ route($item['name']) }}" class="nav-link {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                            <svg style="width: 18px; height: 18px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $item['icon'] !!}</svg>
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </nav>

                {{-- Sidebar Footer --}}
                <div style="padding: 16px 12px; border-top: 1px solid rgba(255,255,255,0.05);">
                    <a href="{{ url('/') }}" target="_blank" class="nav-link" style="color: #7c7c7c;">
                        <svg style="width: 18px; height: 18px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        Lihat Website
                    </a>
                </div>
            </div>
        </aside>

        {{-- ═══════ MAIN CONTENT ═══════ --}}
        <main style="margin-left: 260px; flex: 1; min-height: 100vh; background: #121212;">
            {{-- Header --}}
            <header style="background: rgba(18,18,18,0.85); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-bottom: 1px solid rgba(255,255,255,0.05); position: sticky; top: 0; z-index: 40;">
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 0 32px; height: 64px;">
                    <h1 style="font-size: 16px; font-weight: 700; color: #ffffff; letter-spacing: -0.02em;">@yield('title', 'Dashboard')</h1>
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: #1f1f1f; display: flex; align-items: center; justify-content: center; color: #1ed760; font-size: 12px; font-weight: 700; border: 1px solid rgba(255,255,255,0.1);">
                                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                            </div>
                            <div>
                                <p style="font-size: 13px; font-weight: 700; color: #ffffff; line-height: 1.2;">{{ auth()->user()->name ?? 'Admin' }}</p>
                                <p style="font-size: 11px; color: #b3b3b3; line-height: 1.2; text-transform: capitalize;">{{ auth()->user()->role ?? 'admin' }}</p>
                            </div>
                        </div>

                        <div style="width: 1px; height: 20px; background: rgba(255,255,255,0.1);"></div>

                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" style="display: flex; align-items: center; gap: 6px; padding: 8px 16px; font-size: 13px; font-weight: 700; color: #b3b3b3; background: #1f1f1f; border: none; border-radius: 9999px; cursor: pointer; transition: all 0.15s ease;" onmouseover="this.style.color='#ffffff';this.style.background='#2a2a2a'" onmouseout="this.style.color='#b3b3b3';this.style.background='#1f1f1f'">
                                <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            {{-- Content --}}
            <div style="padding: 32px;">
                @if(session('success'))
                    <div style="margin-bottom: 24px; display: flex; align-items: center; gap: 12px; padding: 14px 20px; background: rgba(30,215,96,0.1); border: 1px solid rgba(30,215,96,0.2); border-radius: 8px; font-size: 13px; font-weight: 500; color: #1ed760;">
                        <svg style="width: 16px; height: 16px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div style="margin-bottom: 24px; display: flex; align-items: center; gap: 12px; padding: 14px 20px; background: rgba(243,114,127,0.1); border: 1px solid rgba(243,114,127,0.2); border-radius: 8px; font-size: 13px; font-weight: 500; color: #f3727f;">
                        <svg style="width: 16px; height: 16px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
