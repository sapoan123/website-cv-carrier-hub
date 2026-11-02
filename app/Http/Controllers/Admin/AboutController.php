<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = AboutSection::latest()->get();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'values' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('images/about', 'public');
        } else {
            unset($data['photo']);
        }

        AboutSection::where('is_active', true)->update(['is_active' => false]);
        AboutSection::create($data);

        return redirect()->route('admin.about.index')->with('success', 'About section berhasil ditambahkan.');
    }

    public function edit(AboutSection $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, AboutSection $about)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'values' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            if ($about->photo && \Storage::disk('public')->exists($about->photo)) {
                \Storage::disk('public')->delete($about->photo);
            }
            $data['photo'] = $request->file('photo')->store('images/about', 'public');
        } else {
            unset($data['photo']);
        }

        if ($about->is_active) {
            AboutSection::where('is_active', true)->where('id', '!=', $about->id)->update(['is_active' => false]);
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About section berhasil diperbarui.');
    }

    public function destroy(AboutSection $about)
    {
        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'About section berhasil dihapus.');
    }
}
