<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required_without:image_url|nullable|image|max:2048',
            'image_url' => 'required_without:image|nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('galleries'), $filename);
            $validated['image'] = 'galleries/' . $filename;
        } else {
            $validated['image'] = $request->image_url;
        }
        unset($validated['image_url']);

        Gallery::create($validated);
        return redirect()->route('admin.galleries.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'image_url' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            if ($gallery->image && str_starts_with($gallery->image, 'galleries/')) {
                $oldPath = public_path($gallery->image);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('galleries'), $filename);
            $validated['image'] = 'galleries/' . $filename;
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }
        unset($validated['image_url']);

        $gallery->update($validated);
        return redirect()->route('admin.galleries.index')->with('success', 'Galeri berhasil diubah.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && str_starts_with($gallery->image, 'galleries/')) {
            $path = public_path($gallery->image);
            if (file_exists($path)) {
                @unlink($path);
            }
        }
        $gallery->delete();
        return redirect()->route('admin.galleries.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
