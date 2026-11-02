@extends('admin.layouts.app')
@section('title', 'Detail Pesan')

@section('content')
    <div class="max-w-2xl">
        <div class="bg-canvas rounded-xl p-8">
            <div class="mb-6">
                <p class="text-xs text-mute uppercase tracking-wider font-semibold mb-1">Pengirim</p>
                <p class="text-lg font-semibold text-ink">{{ $contactMessage->name }}</p>
            </div>
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <p class="text-xs text-mute uppercase tracking-wider font-semibold mb-1">Email</p>
                    <p class="text-sm text-ink">{{ $contactMessage->email }}</p>
                </div>
                <div>
                    <p class="text-xs text-mute uppercase tracking-wider font-semibold mb-1">Telepon</p>
                    <p class="text-sm text-ink">{{ $contactMessage->phone ?? '-' }}</p>
                </div>
            </div>
            <div class="mb-6">
                <p class="text-xs text-mute uppercase tracking-wider font-semibold mb-1">Pesan</p>
                <p class="text-sm text-body leading-relaxed">{{ $contactMessage->message }}</p>
            </div>
            <div class="mb-6">
                <p class="text-xs text-mute uppercase tracking-wider font-semibold mb-1">Dikirim</p>
                <p class="text-sm text-ink">{{ $contactMessage->created_at->format('d M Y H:i') }}</p>
            </div>
            <div class="flex gap-3 pt-4 border-t border-canvas-soft/50">
                @if(!$contactMessage->is_read)
                    <form action="{{ route('admin.contact-message.read', $contactMessage) }}" method="POST">
                        @csrf @method('PATCH')
                        <button type="submit" class="px-4 py-2 bg-primary text-on-primary font-semibold rounded-xl hover:bg-primary-active transition-colors text-sm">Tandai Dibaca</button>
                    </form>
                @endif
                <form action="{{ route('admin.contact-message.destroy', $contactMessage) }}" method="POST" onsubmit="return confirm('Yakin?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="px-4 py-2 border-2 border-negative text-negative font-semibold rounded-xl hover:bg-negative hover:text-canvas transition-colors text-sm">Hapus</button>
                </form>
                <a href="{{ route('admin.contact-message.index') }}" class="px-4 py-2 border-2 border-ink text-ink font-semibold rounded-xl hover:bg-ink hover:text-canvas transition-colors text-sm">Kembali</a>
            </div>
        </div>
    </div>
@endsection
