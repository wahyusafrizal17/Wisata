<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;

class TourPackageController extends Controller
{
    public function index()
    {
        $packagesLokal = TourPackage::where('category', 'lokal')->latest()->get();
        $packagesInternasional = TourPackage::where('category', 'internasional')->latest()->get();

        return view('tour-packages.index', compact('packagesLokal', 'packagesInternasional'));
    }

    public function show(string $slug)
    {
        $package = TourPackage::where('slug', $slug)->firstOrFail();
        return view('tour-packages.show', compact('package'));
    }
}
