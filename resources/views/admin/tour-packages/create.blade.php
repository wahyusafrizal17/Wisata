@extends('layouts.admin')

@section('title', 'Tambah Paket Wisata')
@section('header', 'Tambah Paket Wisata')

@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.tour-packages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow-sm">
            @csrf
            <div>
                <label class="block font-medium mb-2">Judul</label>
                <input type="text" name="title" value="{{ old('title') }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                @error('title')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Kategori</label>
                <select name="category" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                    <option value="lokal" {{ old('category') == 'lokal' ? 'selected' : '' }}>Lokal</option>
                    <option value="internasional" {{ old('category') == 'internasional' ? 'selected' : '' }}>Internasional</option>
                </select>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium mb-2">Harga (Rp)</label>
                    <input type="number" name="price" value="{{ old('price') }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                </div>
                <div>
                    <label class="block font-medium mb-2">Durasi</label>
                    <input type="text" name="duration" value="{{ old('duration') }}" placeholder="2 Hari 1 Malam" class="w-full border border-slate-200 rounded-xl px-4 py-2">
                </div>
            </div>
            <div>
                <label class="block font-medium mb-2">Deskripsi</label>
                <textarea name="description" rows="4" class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('description') }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-2">Itinerary (satu baris per poin)</label>
                <textarea name="itinerary" rows="6" class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('itinerary') }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-2">Fasilitas (satu baris per item)</label>
                <textarea name="facilities" rows="4" placeholder="Transportasi&#10;Hotel&#10;Tiket masuk" class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('facilities') }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-2">Gambar (upload)</label>
                <input type="file" name="image" accept="image/*" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Atau URL Gambar</label>
                <input type="url" name="image_url" value="{{ old('image_url') }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Simpan</button>
                <a href="{{ route('admin.tour-packages.index') }}" class="px-6 py-2 bg-slate-200 rounded-xl hover:bg-slate-300">Batal</a>
            </div>
        </form>
    </div>
@endsection
