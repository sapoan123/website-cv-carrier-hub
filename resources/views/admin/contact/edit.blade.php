@extends('admin.layouts.app')
@section('title', 'Edit Kontak')

@section('content')
    <div style="max-width: 640px; margin: 0 auto;">
        <div style="background: #181818; border-radius: 8px; padding: 32px; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
            <h2 style="font-size: 18px; font-weight: 700; color: #ffffff; margin-bottom: 24px;">Edit Kontak</h2>
            <form action="{{ route('admin.contact.update', $contact) }}" method="POST">
                @csrf
                @method('PUT')
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Alamat</label>
                    <textarea name="address" rows="2" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; resize: vertical; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">{{ old('address', $contact->address) }}</textarea>
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Email</label>
                    <input type="email" name="email" value="{{ old('email', $contact->email) }}" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">WhatsApp</label>
                    <input type="text" name="whatsapp" value="{{ old('whatsapp', $contact->whatsapp) }}" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Google Maps Embed</label>
                    <textarea name="google_maps_embed" rows="3" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; resize: vertical; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">{{ old('google_maps_embed', $contact->google_maps_embed) }}</textarea>
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Jam Operasional</label>
                    <input type="text" name="operational_hours" value="{{ old('operational_hours', $contact->operational_hours) }}" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 24px;">
                    <input type="checkbox" name="is_active" value="1" {{ $contact->is_active ? 'checked' : '' }} id="is_active" style="width: 16px; height: 16px; accent-color: #1ed760; border-radius: 4px;">
                    <label for="is_active" style="font-size: 13px; color: #b3b3b3;">Aktif</label>
                </div>
                <div style="display: flex; gap: 12px;">
                    <button type="submit" style="padding: 12px 28px; background: #1ed760; color: #000000; border-radius: 9999px; font-size: 13px; font-weight: 700; border: none; cursor: pointer; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform=''">Update</button>
                    <a href="{{ route('admin.contact.index') }}" style="padding: 12px 28px; border: 1px solid rgba(255,255,255,0.1); color: #b3b3b3; border-radius: 9999px; font-size: 13px; font-weight: 700; text-decoration: none; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.borderColor='rgba(255,255,255,0.3)'; this.style.color='#ffffff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.color='#b3b3b3'">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
