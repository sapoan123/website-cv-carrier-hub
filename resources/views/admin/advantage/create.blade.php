@extends('admin.layouts.app')
@section('title', 'Tambah Keunggulan')

@section('content')
    <div style="max-width: 640px; margin: 0 auto;">
        <div style="background: #181818; border-radius: 8px; padding: 32px; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
            <h2 style="font-size: 18px; font-weight: 700; color: #ffffff; margin-bottom: 24px;">Tambah Keunggulan</h2>
            <form action="{{ route('admin.advantage.store') }}" method="POST">
                @csrf
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Judul *</label>
                    <input type="text" name="title" value="{{ old('title') }}" required style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Deskripsi</label>
                    <textarea name="description" rows="3" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; resize: vertical; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">{{ old('description') }}</textarea>
                </div>
                <div style="margin-bottom: 20px; padding: 12px 16px; background: rgba(30,215,96,0.08); border: 1px solid rgba(30,215,96,0.2); border-radius: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <svg fill="none" viewBox="0 0 24 24" style="width: 16px; height: 16px; flex-shrink: 0;"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span style="font-size: 12px; color: #b3b3b3;">Icon akan otomatis ditampilkan di landing page tanpa perlu upload gambar.</span>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 24px;">
                    <input type="checkbox" name="is_active" value="1" checked id="is_active" style="width: 16px; height: 16px; accent-color: #1ed760; border-radius: 4px;">
                    <label for="is_active" style="font-size: 13px; color: #b3b3b3;">Aktif</label>
                </div>
                <div style="display: flex; gap: 12px;">
                    <button type="submit" style="padding: 12px 28px; background: #1ed760; color: #000000; border-radius: 9999px; font-size: 13px; font-weight: 700; border: none; cursor: pointer; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform=''">Simpan</button>
                    <a href="{{ route('admin.advantage.index') }}" style="padding: 12px 28px; border: 1px solid rgba(255,255,255,0.1); color: #b3b3b3; border-radius: 9999px; font-size: 13px; font-weight: 700; text-decoration: none; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.borderColor='rgba(255,255,255,0.3)'; this.style.color='#ffffff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.color='#b3b3b3'">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
