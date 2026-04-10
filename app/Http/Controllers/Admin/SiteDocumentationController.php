<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteDocumentation;
use Illuminate\Http\Request;

class SiteDocumentationController extends Controller
{
    public function edit()
    {
        $documentation = SiteDocumentation::query()->firstOrCreate([], [
            'title' => 'Dokumentasi Perjalanan',
            'subtitle' => 'Momen-momen indah dari perjalanan bersama SMJ Rent',
        ]);

        return view('admin.site-documentation.edit', compact('documentation'));
    }

    public function update(Request $request)
    {
        $documentation = SiteDocumentation::query()->firstOrCreate([]);

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'instagram_url' => 'nullable|url|max:255',
        ]);

        $documentation->update($validated);

        return redirect()->route('admin.site-documentation.edit')->with('success', 'Dokumentasi berhasil diperbarui.');
    }
}

