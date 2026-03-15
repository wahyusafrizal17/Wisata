@extends('layouts.admin')

@section('title', 'Edit Paket Wisata')
@section('header', 'Edit Paket Wisata')

@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.tour-packages.update', $tourPackage) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow-sm">
            @csrf @method('PUT')
            <div>
                <label class="block font-medium mb-2">Judul</label>
                <input type="text" name="title" value="{{ old('title', $tourPackage->title) }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                @error('title')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Kategori</label>
                <select name="category" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                    <option value="lokal" {{ old('category', $tourPackage->category) == 'lokal' ? 'selected' : '' }}>Lokal</option>
                    <option value="internasional" {{ old('category', $tourPackage->category) == 'internasional' ? 'selected' : '' }}>Internasional</option>
                </select>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium mb-2">Harga (Rp)</label>
                    <input type="number" name="price" value="{{ old('price', $tourPackage->price) }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                </div>
                <div>
                    <label class="block font-medium mb-2">Durasi</label>
                    <input type="text" name="duration" value="{{ old('duration', $tourPackage->duration) }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
                </div>
            </div>
            <div>
                <label class="block font-medium mb-2">Deskripsi</label>
                <textarea name="description" rows="4" class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('description', $tourPackage->description) }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-2">Itinerary</label>
                <textarea name="itinerary" rows="6" class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('itinerary', $tourPackage->itinerary) }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-2">Fasilitas (satu baris per item)</label>
                <textarea name="facilities" rows="4" class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('facilities', $tourPackage->facilities ? implode("\n", $tourPackage->facilities) : '') }}</textarea>
            </div>
            @if($tourPackage->image)
            <div>
                <label class="block font-medium mb-2">Gambar saat ini</label>
                <img src="{{ image_url($tourPackage->image) }}" alt="" class="w-48 h-32 object-cover rounded-lg">
            </div>
            @endif
            <div>
                <label class="block font-medium mb-2">Gambar baru</label>
                <input type="file" name="image" accept="image/*" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Atau URL Gambar</label>
                <input type="url" name="image_url" value="{{ old('image_url', str_starts_with($tourPackage->image ?? '', 'http') ? $tourPackage->image : '') }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Simpan</button>
                <a href="{{ route('admin.tour-packages.index') }}" class="px-6 py-2 bg-slate-200 rounded-xl hover:bg-slate-300">Batal</a>
            </div>
        </form>
    </div>
@endsection
