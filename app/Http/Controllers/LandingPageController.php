<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Advantage;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\SeoSetting;
use App\Models\ContactMessage;
use App\Models\CaraBuatCvStep;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $about = AboutSection::where('is_active', true)->latest()->first();
        $advantages = Advantage::where('is_active', true)->orderBy('sort_order')->get();
        $services = Service::where('is_published', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::where('is_active', true)->get();
        $faqs = Faq::where('is_active', true)->orderBy('sort_order')->get();
        $contact = Contact::where('is_active', true)->first();
        $footer = Footer::where('is_active', true)->with(['socialMedia', 'quickLinks'])->first();
        $seo = SeoSetting::first();
        $caraBuatCvSteps = CaraBuatCvStep::where('is_active', true)->orderBy('sort_order')->get();

        return view('landing-page', compact(
            'about', 'advantages', 'services',
            'testimonials', 'faqs', 'contact', 'footer', 'seo',
            'caraBuatCvSteps'
        ));
    }

    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($data);

        return back()->with('success', 'Pesan berhasil dikirim! Kami akan menghubungi Anda segera.');
    }
}
