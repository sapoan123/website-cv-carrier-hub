<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons/services', 'public');
        } else {
            unset($data['icon']);
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/services', 'public');
        } else {
            unset($data['image']);
        }

        unset($data['sort_order']);

        Service::create($data);

        return redirect()->route('admin.service.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        if ($request->hasFile('icon')) {
            if ($service->icon && \Storage::disk('public')->exists($service->icon)) {
                \Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $request->file('icon')->store('icons/services', 'public');
        } else {
            unset($data['icon']);
        }

        if ($request->hasFile('image')) {
            if ($service->image && \Storage::disk('public')->exists($service->image)) {
                \Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $request->file('image')->store('images/services', 'public');
        } else {
            unset($data['image']);
        }

        $service->update($data);

        return redirect()->route('admin.service.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.service.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
