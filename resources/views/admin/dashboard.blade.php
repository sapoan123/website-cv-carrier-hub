@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
    {{-- ═══════ WELCOME BANNER ═══════ --}}
    <div style="position: relative; border-radius: 8px; padding: 32px; margin-bottom: 24px; overflow: hidden; background: #181818; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
        <div style="position: absolute; top: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background: rgba(30,215,96,0.05); filter: blur(80px); transform: translate(30%, -40%);"></div>
        <div style="position: absolute; bottom: 0; left: 30%; width: 200px; height: 200px; border-radius: 50%; background: rgba(30,215,96,0.03); filter: blur(60px); transform: translateY(50%);"></div>

        <div style="position: relative; z-index: 10; display: flex; align-items: center; justify-content: space-between;">
            <div>
                <span style="font-size: 12px; font-weight: 600; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">{{ now()->translatedFormat('l, d F Y') }}</span>
                <h2 style="margin-top: 8px; font-size: 24px; font-weight: 700; color: #ffffff; letter-spacing: -0.02em;">
                    Selamat datang kembali, <span style="color: #1ed760;">{{ auth()->user()->name ?? 'Admin' }}</span>
                </h2>
                <p style="margin-top: 8px; font-size: 14px; color: #b3b3b3; max-width: 480px;">Kelola seluruh konten website CVHub Career Anda dari satu tempat.</p>
            </div>
            <div style="display: flex; gap: 12px; flex-shrink: 0;">
                <a href="{{ route('admin.advantage.create') }}" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 24px; background: #1ed760; color: #000000; border-radius: 9999px; font-size: 13px; font-weight: 700; text-decoration: none; transition: all 0.15s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform=''">
                    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    Tambah Keunggulan
                </a>
            </div>
        </div>
    </div>

    <div style="border-top: 1px solid rgba(255,255,255,0.05); margin-bottom: 24px;"></div>

    {{-- ═══════ STAT CARDS ═══════ --}}
    <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px; margin-bottom: 24px;">
        @php
        $stats = [
            ['label' => 'Admin', 'value' => $totalUsers, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>', 'accent' => '#b3b3b3', 'badge' => null],
            ['label' => 'Keunggulan', 'value' => $totalAdvantages, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>', 'accent' => '#1ed760', 'badge' => null],
            ['label' => 'Cara Buat CV', 'value' => $totalCaraBuatCv, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>', 'accent' => '#539df5', 'badge' => null],
            ['label' => 'Testimoni', 'value' => $totalTestimonials, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>', 'accent' => '#ffa42b', 'badge' => null],
            ['label' => 'Layanan', 'value' => $totalServices, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>', 'accent' => '#b3b3b3', 'badge' => null],
            ['label' => 'FAQ', 'value' => $totalFaqs, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>', 'accent' => '#7c7c7c', 'badge' => null],
        ];
        @endphp

        @foreach($stats as $stat)
            <div style="background: #181818; border-radius: 8px; padding: 20px; transition: all 0.2s ease; cursor: default; {{ $stat['badge'] ? '' : 'text-align: center;' }}" onmouseover="this.style.background='#1f1f1f';this.style.boxShadow='rgba(0,0,0,0.3) 0px 8px 8px'" onmouseout="this.style.background='#181818';this.style.boxShadow='none'">
                <div style="display: flex; align-items: center; justify-content: {{ $stat['badge'] ? 'space-between' : 'center' }}; margin-bottom: 16px;">
                    @if($stat['icon'])
                    <div style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.05); border-radius: 8px; {{ $stat['badge'] ? '' : 'margin: 0 auto;' }}">
                        <svg style="width: 20px; height: 20px; color: {{ $stat['accent'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">{!! $stat['icon'] !!}</svg>
                    </div>
                    @endif
                    @if($stat['badge'])
                        <span style="display: inline-flex; align-items: center; gap: 4px; padding: 4px 10px; font-size: 11px; font-weight: 700; color: #539df5; background: rgba(83,157,245,0.1); border-radius: 9999px;">
                            <span style="width: 4px; height: 4px; border-radius: 50%; background: #539df5;"></span>
                            {{ $stat['badge'] }}
                        </span>
                    @endif
                </div>
                <p style="font-size: 28px; font-weight: 700; color: #ffffff; letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</p>
                <p style="margin-top: 6px; font-size: 13px; font-weight: 400; color: #b3b3b3;">{{ $stat['label'] }}</p>
            </div>
        @endforeach
    </div>



    {{-- ═══════ RECENT ADVANTAGES TABLE ═══════ --}}
    <div style="background: #181818; border-radius: 8px; overflow: hidden; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 20px 24px; border-bottom: 1px solid rgba(255,255,255,0.05);">
            <h3 style="font-size: 14px; font-weight: 700; color: #ffffff;">Keunggulan Terbaru</h3>
            @if($totalAdvantages > 5)
                <a href="{{ route('admin.advantage.index') }}" style="font-size: 12px; font-weight: 700; color: #b3b3b3; text-decoration: none; transition: color 0.15s ease;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#b3b3b3'">Lihat Semua &rarr;</a>
            @endif
        </div>

        @if($recentAdvantages->count() > 0)
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <th style="text-align: center; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">No</th>
                        <th style="text-align: left; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Judul</th>
                        <th style="text-align: left; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Status</th>
                        <th style="text-align: right; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentAdvantages as $item)
                        <tr style="border-bottom: 1px solid rgba(255,255,255,0.03); transition: background 0.15s ease;" onmouseover="this.style.background='rgba(255,255,255,0.03)'" onmouseout="this.style.background='transparent'">
                            <td style="padding: 16px 24px; font-size: 13px; color: #b3b3b3; text-align: center;">{{ $loop->iteration }}</td>
                            <td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #ffffff;">{{ $item->title }}</td>
                            <td style="padding: 16px 24px;">
                                @if($item->is_active)
                                    <span style="display: inline-flex; align-items: center; gap: 4px; padding: 4px 10px; font-size: 11px; font-weight: 700; color: #1ed760; background: rgba(30,215,96,0.1); border-radius: 9999px;">
                                        <span style="width: 4px; height: 4px; border-radius: 50%; background: #1ed760;"></span>
                                        Aktif
                                    </span>
                                @else
                                    <span style="display: inline-flex; align-items: center; gap: 4px; padding: 4px 10px; font-size: 11px; font-weight: 700; color: #7c7c7c; background: rgba(255,255,255,0.05); border-radius: 9999px;">
                                        <span style="width: 4px; height: 4px; border-radius: 50%; background: #7c7c7c;"></span>
                                        Nonaktif
                                    </span>
                                @endif
                            </td>
                            <td style="padding: 16px 24px; text-align: right;">
                                <a href="{{ route('admin.advantage.edit', $item) }}" style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 16px; background: rgba(30,215,96,0.1); color: #1ed760; border-radius: 9999px; font-size: 12px; font-weight: 700; text-decoration: none; transition: all 0.15s ease;" onmouseover="this.style.background='rgba(30,215,96,0.2)'" onmouseout="this.style.background='rgba(30,215,96,0.1)'">
                                    <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    Edit
                                </a>
                                <form action="{{ route('admin.advantage.destroy', $item) }}" method="POST" style="display: inline; margin-left: 8px;" onsubmit="return confirm('Yakin?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 16px; background: rgba(243,114,127,0.1); color: #f3727f; border-radius: 9999px; font-size: 12px; font-weight: 700; border: none; cursor: pointer; font-family: inherit; transition: all 0.15s ease;" onmouseover="this.style.background='rgba(243,114,127,0.2)'" onmouseout="this.style.background='rgba(243,114,127,0.1)'">
                                        <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div style="padding: 56px 24px; text-align: center;">
                <div style="width: 56px; height: 56px; display: flex; align-items: center; justify-content: center; margin: 0 auto; background: #1f1f1f; border-radius: 50%;">
                    <svg style="width: 24px; height: 24px; color: #7c7c7c;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <p style="margin-top: 16px; font-size: 14px; font-weight: 700; color: #b3b3b3;">Belum ada data keunggulan</p>
                <p style="margin-top: 4px; font-size: 12px; color: #7c7c7c;">Data keunggulan akan muncul di sini</p>
            </div>
        @endif
    </div>
@endsection
