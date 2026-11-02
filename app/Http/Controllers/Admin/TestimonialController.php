<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'rating' => 'nullable|integer|min:1|max:5',
            'content' => 'required|string',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('images/testimonials', 'public');
        } else {
            unset($data['photo']);
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'rating' => 'nullable|integer|min:1|max:5',
            'content' => 'required|string',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            if ($testimonial->photo && \Storage::disk('public')->exists($testimonial->photo)) {
                \Storage::disk('public')->delete($testimonial->photo);
            }
            $data['photo'] = $request->file('photo')->store('images/testimonials', 'public');
        } else {
            unset($data['photo']);
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}
