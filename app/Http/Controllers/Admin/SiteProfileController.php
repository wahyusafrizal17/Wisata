<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteProfile;
use Illuminate\Http\Request;

class SiteProfileController extends Controller
{
    public function edit()
    {
        $profile = SiteProfile::query()->firstOrCreate([]);

        return view('admin.site-profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = SiteProfile::query()->firstOrCreate([]);

        $validated = $request->validate([
            'description' => 'nullable|string',
            'photo' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('photo')) {
            if ($profile->photo && str_starts_with($profile->photo, 'profile/')) {
                $oldPath = public_path($profile->photo);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $file = $request->file('photo');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('profile'), $filename);
            $validated['photo'] = 'profile/' . $filename;
        }

        $profile->update($validated);

        return redirect()->route('admin.site-profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}

