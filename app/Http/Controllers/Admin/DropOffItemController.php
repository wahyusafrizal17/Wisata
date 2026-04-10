<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DropOffItem;
use Illuminate\Http\Request;

class DropOffItemController extends Controller
{
    public function index()
    {
        $items = DropOffItem::query()
            ->orderByRaw('COALESCE(`order`, 999999) asc')
            ->latest('id')
            ->get();

        return view('admin.drop-off-items.index', compact('items'));
    }

    public function create()
    {
        return view('admin.drop-off-items.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:10240',
            'price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('drop-off-items'), $filename);
            $validated['image'] = 'drop-off-items/' . $filename;
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        DropOffItem::create($validated);

        return redirect()->route('admin.drop-off-items.index')->with('success', 'Item drop off berhasil ditambahkan.');
    }

    public function edit(DropOffItem $dropOffItem)
    {
        return view('admin.drop-off-items.edit', ['item' => $dropOffItem]);
    }

    public function update(Request $request, DropOffItem $dropOffItem)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:10240',
            'price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($dropOffItem->image && str_starts_with($dropOffItem->image, 'drop-off-items/')) {
                $oldPath = public_path($dropOffItem->image);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('drop-off-items'), $filename);
            $validated['image'] = 'drop-off-items/' . $filename;
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        $dropOffItem->update($validated);

        return redirect()->route('admin.drop-off-items.index')->with('success', 'Item drop off berhasil diperbarui.');
    }

    public function destroy(DropOffItem $dropOffItem)
    {
        if ($dropOffItem->image && str_starts_with($dropOffItem->image, 'drop-off-items/')) {
            $path = public_path($dropOffItem->image);
            if (file_exists($path)) {
                @unlink($path);
            }
        }
        $dropOffItem->delete();

        return redirect()->route('admin.drop-off-items.index')->with('success', 'Item drop off berhasil dihapus.');
    }
}

