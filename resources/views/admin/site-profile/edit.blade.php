@extends('layouts.admin')

@section('title', 'Profil')
@section('header', 'Profil')

@section('content')
    <div class="max-w-3xl">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <form action="{{ route('admin.site-profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-medium mb-2">Deskripsi</label>
                    <textarea
                        name="description"
                        rows="5"
                        class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500"
                        placeholder="Tulis deskripsi profil..."
                    >{{ old('description', $profile->description) }}</textarea>
                    @error('description')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium mb-2">Foto (upload)</label>
                    <input
                        type="file"
                        name="photo"
                        accept="image/*"
                        class="block w-full text-sm text-slate-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200"
                    />
                    @error('photo')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror

                    <div class="mt-4">
                        <p class="text-sm text-slate-500 mb-2">Preview</p>
                        <img
                            src="{{ $profile->photo ? image_url($profile->photo) : 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=800&q=80' }}"
                            alt="Foto profil"
                            class="w-full max-w-lg h-56 object-cover rounded-2xl border border-slate-100"
                            loading="lazy"
                        >
                    </div>
                </div>

                <div class="flex items-center justify-end gap-3">
                    <button type="submit" class="px-5 py-2.5 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-semibold">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
        <p class="text-sm text-slate-500 mt-4">
            Perubahan akan tampil di section <strong>Profil</strong> pada halaman utama.
        </p>
    </div>
@endsection

