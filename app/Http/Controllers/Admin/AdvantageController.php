<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    private function getDefaultIcons()
    {
        return [
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/></svg>',
            '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>',
        ];
    }

    public function index()
    {
        $advantages = Advantage::orderBy('sort_order')->get();
        return view('admin.advantage.index', compact('advantages'));
    }

    public function create()
    {
        return view('admin.advantage.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons/advantages', 'public');
        } else {
            $defaults = $this->getDefaultIcons();
            $usedIcons = Advantage::whereNotNull('icon')->pluck('icon')->toArray();
            $availableIcons = array_diff($defaults, $usedIcons);
            $nextIcon = !empty($availableIcons) ? reset($availableIcons) : $defaults[Advantage::count() % count($defaults)];
            $data['icon'] = $nextIcon;
        }

        $data['sort_order'] = $request->input('sort_order') ?? (Advantage::max('sort_order') + 1);

        Advantage::create($data);

        return redirect()->route('admin.advantage.index')->with('success', 'Keunggulan berhasil ditambahkan. Icon otomatis ditampilkan di landing page.');
    }

    public function edit(Advantage $advantage)
    {
        return view('admin.advantage.edit', compact('advantage'));
    }

    public function update(Request $request, Advantage $advantage)
    {
        $data = $request->validate([
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('icon')) {
            if ($advantage->icon && !str_contains($advantage->icon, '<svg') && \Storage::disk('public')->exists($advantage->icon)) {
                \Storage::disk('public')->delete($advantage->icon);
            }
            $data['icon'] = $request->file('icon')->store('icons/advantages', 'public');
        } elseif (empty($data['icon'])) {
            $data['icon'] = $advantage->icon;
        }

        $advantage->update($data);

        return redirect()->route('admin.advantage.index')->with('success', 'Keunggulan berhasil diperbarui.');
    }

    public function destroy(Advantage $advantage)
    {
        $advantage->delete();

        return redirect()->route('admin.advantage.index')->with('success', 'Keunggulan berhasil dihapus.');
    }
}
