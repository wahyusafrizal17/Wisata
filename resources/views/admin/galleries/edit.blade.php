@extends('layouts.admin')

@section('title', 'Edit Galeri')
@section('header', 'Edit Galeri')

@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow-sm">
            @csrf @method('PUT')
            <div>
                <label class="block font-medium mb-2">Judul</label>
                <input type="text" name="title" value="{{ old('title', $gallery->title) }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            @if($gallery->image)
            <div>
                <label class="block font-medium mb-2">Gambar saat ini</label>
                <img src="{{ image_url($gallery->image) }}" alt="" class="w-48 h-32 object-cover rounded-lg">
            </div>
            @endif
            <div>
                <label class="block font-medium mb-2">Gambar baru (upload)</label>
                <input type="file" name="image" accept="image/*" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Atau URL Gambar</label>
                <input type="url" name="image_url" value="{{ old('image_url', str_starts_with($gallery->image ?? '', 'http') ? $gallery->image : '') }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Simpan</button>
                <a href="{{ route('admin.galleries.index') }}" class="px-6 py-2 bg-slate-200 rounded-xl hover:bg-slate-300">Batal</a>
            </div>
        </form>
    </div>
@endsection
