@extends('admin.layouts.app')
@section('title', 'Tambah Admin')

@section('content')
    <div style="max-width: 640px; margin: 0 auto;">
        <div style="background: #181818; border-radius: 8px; padding: 32px; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
            <h2 style="font-size: 18px; font-weight: 700; color: #ffffff; margin-bottom: 24px;">Tambah Admin</h2>
            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Nama *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Password *</label>
                    <input type="password" name="password" required style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Konfirmasi Password *</label>
                    <input type="password" name="password_confirmation" required style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Role</label>
                    <select name="role" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                        <option value="admin">Admin</option>
                        <option value="super_admin">Super Admin</option>
                    </select>
                </div>
                <div style="display: flex; gap: 12px;">
                    <button type="submit" style="padding: 12px 28px; background: #1ed760; color: #000000; border-radius: 9999px; font-size: 13px; font-weight: 700; border: none; cursor: pointer; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform=''">Simpan</button>
                    <a href="{{ route('admin.user.index') }}" style="padding: 12px 28px; border: 1px solid rgba(255,255,255,0.1); color: #b3b3b3; border-radius: 9999px; font-size: 13px; font-weight: 700; text-decoration: none; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.borderColor='rgba(255,255,255,0.3)'; this.style.color='#ffffff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.color='#b3b3b3'">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
