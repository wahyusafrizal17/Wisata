<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TourPackageController extends Controller
{
    public function index()
    {
        $packages = TourPackage::latest()->get();
        return view('admin.tour-packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.tour-packages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'required|in:lokal,internasional',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'itinerary' => 'nullable|string',
            'facilities' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('tour-packages', 'public');
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        if (!empty($validated['facilities'])) {
            $validated['facilities'] = array_filter(array_map('trim', explode("\n", $validated['facilities'])));
        }

        TourPackage::create($validated);
        return redirect()->route('admin.tour-packages.index')->with('success', 'Paket wisata berhasil ditambahkan.');
    }

    public function edit(TourPackage $tourPackage)
    {
        return view('admin.tour-packages.edit', compact('tourPackage'));
    }

    public function update(Request $request, TourPackage $tourPackage)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'required|in:lokal,internasional',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'itinerary' => 'nullable|string',
            'facilities' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($tourPackage->image && str_starts_with($tourPackage->image, 'tour-packages/')) {
                Storage::disk('public')->delete($tourPackage->image);
            }
            $validated['image'] = $request->file('image')->store('tour-packages', 'public');
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        if (!empty($validated['facilities'])) {
            $validated['facilities'] = array_filter(array_map('trim', explode("\n", $validated['facilities'])));
        }

        $tourPackage->update($validated);
        return redirect()->route('admin.tour-packages.index')->with('success', 'Paket wisata berhasil diubah.');
    }

    public function destroy(TourPackage $tourPackage)
    {
        if ($tourPackage->image && str_starts_with($tourPackage->image, 'tour-packages/')) {
            Storage::disk('public')->delete($tourPackage->image);
        }
        $tourPackage->delete();
        return redirect()->route('admin.tour-packages.index')->with('success', 'Paket wisata berhasil dihapus.');
    }
}
