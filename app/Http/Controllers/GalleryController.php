<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\SiteDocumentation;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        $documentation = SiteDocumentation::query()->first();

        return view('gallery.index', compact('galleries', 'documentation'));
    }
}
