<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'address' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'google_maps_embed' => 'nullable|string',
            'operational_hours' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        Contact::create($data);

        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'address' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'google_maps_embed' => 'nullable|string',
            'operational_hours' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $contact->update($data);

        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
