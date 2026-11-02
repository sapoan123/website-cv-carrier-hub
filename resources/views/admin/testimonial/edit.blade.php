@extends('admin.layouts.app')
@section('title', 'Edit Testimoni')

@section('content')
    <div style="max-width: 640px; margin: 0 auto;">
        <div style="background: #181818; border-radius: 8px; padding: 32px; box-shadow: rgba(0,0,0,0.3) 0px 8px 8px;">
            <h2 style="font-size: 18px; font-weight: 700; color: #ffffff; margin-bottom: 24px;">Edit Testimoni</h2>
            <form action="{{ route('admin.testimonial.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Nama *</label>
                    <input type="text" name="name" value="{{ old('name', $testimonial->name) }}" required style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Jabatan</label>
                    <input type="text" name="position" value="{{ old('position', $testimonial->position) }}" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Rating (1-5)</label>
                    <input type="number" name="rating" value="{{ old('rating', $testimonial->rating) }}" min="1" max="5" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Isi Testimoni *</label>
                    <textarea name="content" rows="4" required style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #ffffff; font-size: 14px; font-family: inherit; outline: none; resize: vertical; transition: border-color 0.15s ease;" onfocus="this.style.borderColor='#1ed760'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">{{ old('content', $testimonial->content) }}</textarea>
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px;">Foto *</label>
                    <div style="width: 100%;">
                        <input type="file" name="photo" accept="image/*" style="width: 100%; padding: 12px 16px; background: #121212; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: #b3b3b3; font-size: 13px; font-family: inherit; outline: none; file-selector-button: padding: 8px 16px; file-selector-button: background: rgba(255,255,255,0.05); file-selector-button: border: 1px solid rgba(255,255,255,0.1); file-selector-button: border-radius: 6px; file-selector-button: color: #b3b3b3; file-selector-button: font-size: 12px; file-selector-button: font-weight: 700; file-selector-button: cursor: pointer; file-selector-button: font-family: inherit;">
                    </div>
                    @if($testimonial->photo)
                        <p style="margin-top: 6px; font-size: 11px; color: #7c7c7c;">Foto saat ini: {{ $testimonial->photo }}</p>
                    @endif
                    <p style="margin-top: 6px; font-size: 11px; color: #7c7c7c;">Format: JPG, PNG, SVG. Maks 2MB. Kosongkan jika tidak ingin mengubah.</p>
                </div>
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 24px;">
                    <input type="checkbox" name="is_active" value="1" {{ $testimonial->is_active ? 'checked' : '' }} id="is_active" style="width: 16px; height: 16px; accent-color: #1ed760; border-radius: 4px;">
                    <label for="is_active" style="font-size: 13px; color: #b3b3b3;">Aktif</label>
                </div>
                <div style="display: flex; gap: 12px;">
                    <button type="submit" style="padding: 12px 28px; background: #1ed760; color: #000000; border-radius: 9999px; font-size: 13px; font-weight: 700; border: none; cursor: pointer; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform=''">Update</button>
                    <a href="{{ route('admin.testimonial.index') }}" style="padding: 12px 28px; border: 1px solid rgba(255,255,255,0.1); color: #b3b3b3; border-radius: 9999px; font-size: 13px; font-weight: 700; text-decoration: none; font-family: inherit; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.borderColor='rgba(255,255,255,0.3)'; this.style.color='#ffffff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.color='#b3b3b3'">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
