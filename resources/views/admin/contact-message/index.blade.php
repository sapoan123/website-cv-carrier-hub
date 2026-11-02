@extends('admin.layouts.app')
@section('title', 'Pesan Masuk')

@section('content')
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
        <p style="font-size: 14px; color: #b3b3b3;">Kelola pesan yang masuk dari pengunjung website</p>
    </div>

    <div style="background: #181818; border-radius: 8px; overflow: hidden; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <th style="text-align: center; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">No</th>
                    <th style="text-align: left; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Nama</th>
                    <th style="text-align: left; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Email</th>
                    <th style="text-align: left; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Status</th>
                    <th style="text-align: left; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Tanggal</th>
                    <th style="text-align: right; padding: 14px 24px; font-size: 11px; font-weight: 700; color: #b3b3b3; text-transform: uppercase; letter-spacing: 1.4px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $item)
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.03); transition: background 0.15s ease;" onmouseover="this.style.background='rgba(255,255,255,0.03)'" onmouseout="this.style.background='transparent'">
                        <td style="padding: 16px 24px; font-size: 13px; color: #b3b3b3; text-align: center;">{{ $loop->iteration }}</td>
                        <td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #ffffff;">{{ $item->name }}</td>
                        <td style="padding: 16px 24px; font-size: 13px; color: #b3b3b3;">{{ $item->email }}</td>
                        <td style="padding: 16px 24px;">
                            @if($item->is_read)
                                <span style="display: inline-flex; align-items: center; gap: 4px; padding: 4px 10px; font-size: 11px; font-weight: 700; color: #7c7c7c; background: rgba(255,255,255,0.05); border-radius: 9999px;">
                                    <span style="width: 4px; height: 4px; border-radius: 50%; background: #7c7c7c;"></span>
                                    Dibaca
                                </span>
                            @else
                                <span style="display: inline-flex; align-items: center; gap: 4px; padding: 4px 10px; font-size: 11px; font-weight: 700; color: #1ed760; background: rgba(30,215,96,0.1); border-radius: 9999px;">
                                    <span style="width: 4px; height: 4px; border-radius: 50%; background: #1ed760;"></span>
                                    Baru
                                </span>
                            @endif
                        </td>
                        <td style="padding: 16px 24px; font-size: 13px; color: #b3b3b3;">{{ $item->created_at->format('d M Y H:i') }}</td>
                        <td style="padding: 16px 24px; text-align: right;">
                            <a href="{{ route('admin.contact-message.show', $item) }}" style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 16px; background: rgba(30,215,96,0.1); color: #1ed760; border-radius: 9999px; font-size: 12px; font-weight: 700; text-decoration: none; transition: all 0.15s ease;" onmouseover="this.style.background='rgba(30,215,96,0.2)'" onmouseout="this.style.background='rgba(30,215,96,0.1)'">
                                <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Detail
                            </a>
                            <form action="{{ route('admin.contact-message.destroy', $item) }}" method="POST" style="display: inline; margin-left: 8px;" onsubmit="return confirm('Yakin?')">
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
                        <td colspan="6" style="padding: 56px 24px; text-align: center;">
                            <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; background: #1f1f1f; border-radius: 50%;">
                                <svg style="width: 20px; height: 20px; color: #7c7c7c;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <p style="font-size: 14px; font-weight: 700; color: #b3b3b3;">Belum ada pesan masuk</p>
                            <p style="margin-top: 4px; font-size: 12px; color: #7c7c7c;">Pesan dari pengunjung akan muncul di sini</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
