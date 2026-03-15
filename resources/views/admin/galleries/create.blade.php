@extends('layouts.admin')

@section('title', 'Tambah Galeri')
@section('header', 'Tambah Galeri')

@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow-sm">
            @csrf
            <div>
                <label class="block font-medium mb-2">Judul</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Gambar (upload)</label>
                <input type="file" name="image" accept="image/*" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Atau URL Gambar</label>
                <input type="url" name="image_url" value="{{ old('image_url') }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
                <p class="text-sm text-slate-500 mt-1">Wajib isi salah satu: upload file atau URL</p>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Simpan</button>
                <a href="{{ route('admin.galleries.index') }}" class="px-6 py-2 bg-slate-200 rounded-xl hover:bg-slate-300">Batal</a>
            </div>
        </form>
    </div>
@endsection
