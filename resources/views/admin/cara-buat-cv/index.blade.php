@extends('admin.layouts.app')
@section('title', 'Cara Buat CV')

@section('content')
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
        <p style="font-size: 14px; color: #b3b3b3;">Kelola konten "Cara Buat CV"</p>
        <a href="{{ route('admin.cara-buat-cv.create') }}" style="display: inline-flex; align-items: center; gap: 6px; padding: 10px 24px; background: #1ed760; color: #000000; border-radius: 9999px; font-size: 13px; font-weight: 700; text-decoration: none; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform=''">
            <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            Tambah
        </a>
    </div>

    <div style="background: #181818; border-radius: 8px; overflow: hidden; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
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
                @forelse($steps as $item)
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.03); transition: background 0.15s ease;" onmouseover="this.style.background='rgba(255,255,255,0.03)'" onmouseout="this.style.background='transparent'">
                        <td style="padding: 16px 24px; font-size: 13px; color: #b3b3b3; text-align: center;">{{ $item->num }}</td>
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
                            <a href="{{ route('admin.cara-buat-cv.edit', $item) }}" style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 16px; background: rgba(30,215,96,0.1); color: #1ed760; border-radius: 9999px; font-size: 12px; font-weight: 700; text-decoration: none; transition: all 0.15s ease;" onmouseover="this.style.background='rgba(30,215,96,0.2)'" onmouseout="this.style.background='rgba(30,215,96,0.1)'">
                                <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                Edit
                            </a>
                            <form action="{{ route('admin.cara-buat-cv.destroy', $item) }}" method="POST" style="display: inline; margin-left: 8px;" onsubmit="return confirm('Yakin?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 16px; background: rgba(243,114,127,0.1); color: #f3727f; border-radius: 9999px; font-size: 12px; font-weight: 700; border: none; cursor: pointer; font-family: inherit; transition: all 0.15s ease;" onmouseover="this.style.background='rgba(243,114,127,0.2)'" onmouseout="this.style.background='rgba(243,114,127,0.1)'">
                                    <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="padding: 56px 24px; text-align: center;">
                            <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; background: #1f1f1f; border-radius: 50%;">
                                <svg style="width: 20px; height: 20px; color: #7c7c7c;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                            <p style="font-size: 14px; font-weight: 700; color: #b3b3b3;">Belum ada data</p>
                            <p style="margin-top: 4px; font-size: 12px; color: #7c7c7c;">Klik "Tambah" untuk menambahkan langkah baru</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
