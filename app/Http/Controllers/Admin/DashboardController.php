<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Advantage;
use App\Models\CaraBuatCvStep;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMessages = ContactMessage::count();
        $unreadMessages = ContactMessage::where('is_read', false)->count();
        $totalTestimonials = Testimonial::count();
        $totalFaqs = Faq::count();
        $totalServices = Service::count();
        $totalUsers = User::count();
        $totalAdvantages = Advantage::count();
        $recentAdvantages = Advantage::latest()->take(5)->get();
        $totalCaraBuatCv = CaraBuatCvStep::count();

        return view('admin.dashboard', compact(
            'totalMessages', 'unreadMessages', 'totalTestimonials',
            'totalFaqs', 'totalServices', 'totalAdvantages',
            'recentAdvantages', 'totalUsers', 'totalCaraBuatCv'
        ));
    }
}
