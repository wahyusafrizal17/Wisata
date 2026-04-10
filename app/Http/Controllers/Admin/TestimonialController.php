<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'photo' => 'nullable|image|max:10240',
            'photo_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('photo')) {
            $filename = time() . '-' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('testimonials'), $filename);
            $validated['photo'] = 'testimonials/' . $filename;
        } elseif ($request->filled('photo_url')) {
            $validated['photo'] = $request->photo_url;
        }

        Testimonial::create($validated);
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'photo' => 'nullable|image|max:10240',
            'photo_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('photo')) {
            if ($testimonial->photo && str_starts_with($testimonial->photo, 'testimonials/')) {
                $oldPath = public_path($testimonial->photo);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $filename = time() . '-' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('testimonials'), $filename);
            $validated['photo'] = 'testimonials/' . $filename;
        } elseif ($request->filled('photo_url')) {
            $validated['photo'] = $request->photo_url;
        }

        $testimonial->update($validated);
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil diubah.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo && str_starts_with($testimonial->photo, 'testimonials/')) {
            $path = public_path($testimonial->photo);
            if (file_exists($path)) {
                @unlink($path);
            }
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}
