<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaraBuatCvStep;
use Illuminate\Http\Request;

class CaraBuatCvController extends Controller
{
    private function getDefaultIcons()
    {
        return [
            'icon' => '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>',
            'title_icon' => '<svg class="w-4 h-4 text-spotify-green/40" fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg>',
        ];
    }

    public function index()
    {
        $steps = CaraBuatCvStep::orderBy('sort_order')->get();
        return view('admin.cara-buat-cv.index', compact('steps'));
    }

    public function create()
    {
        return view('admin.cara-buat-cv.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'num' => 'required|string|max:10',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $defaults = $this->getDefaultIcons();

        if (empty($data['icon'])) {
            $data['icon'] = $defaults['icon'];
        }
        if (empty($data['title_icon'])) {
            $data['title_icon'] = $defaults['title_icon'];
        }

        $data['sort_order'] = $request->input('sort_order') ?? (CaraBuatCvStep::max('sort_order') + 1);

        CaraBuatCvStep::create($data);

        return redirect()->route('admin.cara-buat-cv.index')->with('success', 'Langkah berhasil ditambahkan. Icon otomatis ditampilkan di landing page.');
    }

    public function edit(CaraBuatCvStep $step)
    {
        return view('admin.cara-buat-cv.edit', ['step' => $step]);
    }

    public function update(Request $request, CaraBuatCvStep $step)
    {
        $data = $request->validate([
            'num' => 'required|string|max:10',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'title_icon' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'is_active' => 'boolean',
        ]);

        $defaults = $this->getDefaultIcons();

        if (empty($data['icon'])) {
            $data['icon'] = $step->icon ?? $defaults['icon'];
        }
        if (empty($data['title_icon'])) {
            $data['title_icon'] = $step->title_icon ?? $defaults['title_icon'];
        }

        if ($request->hasFile('image')) {
            if ($step->image && \Storage::disk('public')->exists($step->image)) {
                \Storage::disk('public')->delete($step->image);
            }
            $data['image'] = $request->file('image')->store('images/cara-buat-cv', 'public');
        } else {
            unset($data['image']);
        }

        $step->update($data);

        return redirect()->route('admin.cara-buat-cv.index')->with('success', 'Langkah berhasil diperbarui.');
    }

    public function destroy(CaraBuatCvStep $step)
    {
        if ($step->image && \Storage::disk('public')->exists($step->image)) {
            \Storage::disk('public')->delete($step->image);
        }

        $step->delete();

        return redirect()->route('admin.cara-buat-cv.index')->with('success', 'Langkah berhasil dihapus.');
    }
}
