<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use App\Models\TourPackage;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::where('is_active', true)->orderBy('order')->first();
        $cars = Car::latest()->take(3)->get();
        $packages = TourPackage::latest()->take(3)->get();
        $testimonials = Testimonial::orderBy('order')->get();

        return view('home', compact('banner', 'cars', 'packages', 'testimonials'));
    }
}
