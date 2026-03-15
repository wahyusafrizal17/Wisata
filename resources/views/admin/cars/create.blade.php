@extends('layouts.admin')

@section('title', 'Tambah Mobil')
@section('header', 'Tambah Mobil')

@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow-sm">
            @csrf
            <div>
                <label class="block font-medium mb-2">Nama Mobil</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Harga/hari (Rp)</label>
                <input type="number" name="price" value="{{ old('price') }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                @error('price')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Kapasitas (orang)</label>
                <input type="number" name="capacity" value="{{ old('capacity') }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
                @error('capacity')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Deskripsi</label>
                <textarea name="description" rows="3" class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('description') }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Gambar (upload)</label>
                <input type="file" name="image" accept="image/*" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Atau URL Gambar</label>
                <input type="url" name="image_url" value="{{ old('image_url') }}" placeholder="https://..." class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Simpan</button>
                <a href="{{ route('admin.cars.index') }}" class="px-6 py-2 bg-slate-200 rounded-xl hover:bg-slate-300">Batal</a>
            </div>
        </form>
    </div>
@endsection
