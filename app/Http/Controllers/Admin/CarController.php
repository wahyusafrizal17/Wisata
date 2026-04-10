<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('cars'), $filename);
            $validated['image'] = 'cars/' . $filename;
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        Car::create($validated);
        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('image')) {
            if ($car->image && str_starts_with($car->image, 'cars/')) {
                $oldPath = public_path($car->image);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('cars'), $filename);
            $validated['image'] = 'cars/' . $filename;
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        $car->update($validated);
        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil diubah.');
    }

    public function destroy(Car $car)
    {
        if ($car->image && str_starts_with($car->image, 'cars/')) {
            $path = public_path($car->image);
            if (file_exists($path)) {
                @unlink($path);
            }
        }
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
