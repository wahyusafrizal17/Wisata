<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('order')->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:10240',
            'image_url' => 'nullable|url',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('banners'), $filename);
            $validated['image'] = 'banners/' . $filename;
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        Banner::create($validated);
        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:10240',
            'image_url' => 'nullable|url',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($banner->image && str_starts_with($banner->image, 'banners/')) {
                $oldPath = public_path($banner->image);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('banners'), $filename);
            $validated['image'] = 'banners/' . $filename;
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        $banner->update($validated);
        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil diubah.');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image && str_starts_with($banner->image, 'banners/')) {
            $path = public_path($banner->image);
            if (file_exists($path)) {
                @unlink($path);
            }
        }
        $banner->delete();
        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil dihapus.');
    }
}
