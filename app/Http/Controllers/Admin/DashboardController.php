<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\TourPackage;
use App\Models\Gallery;
use App\Models\Banner;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'cars' => Car::count(),
            'packages' => TourPackage::count(),
            'galleries' => Gallery::count(),
            'banners' => Banner::count(),
            'testimonials' => Testimonial::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
