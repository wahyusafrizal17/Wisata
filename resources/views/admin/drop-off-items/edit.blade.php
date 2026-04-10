@extends('layouts.admin')

@section('title', 'Edit Item Drop Off')
@section('header', 'Edit Item Drop Off')

@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.drop-off-items.update', $item) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow-sm">
            @csrf @method('PUT')
            <div>
                <label class="block font-medium mb-2">Judul</label>
                <input type="text" name="title" value="{{ old('title', $item->title) }}" required class="w-full rounded-xl border-slate-200">
                @error('title')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Gambar (opsional)</label>
                <input type="file" name="image" accept="image/*" class="w-full rounded-xl border-slate-200">
                @error('image')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror

                @if($item->image)
                    <div class="mt-3">
                        <p class="text-sm text-slate-600 mb-2">Gambar saat ini:</p>
                        <img src="{{ image_url($item->image) }}" alt="{{ $item->title }}" class="w-full max-w-sm rounded-2xl border border-slate-100 shadow-sm">
                    </div>
                @endif

                <div class="mt-3">
                    <label class="block text-sm text-slate-600 mb-2">Atau pakai URL gambar (opsional)</label>
                    <input type="text" name="image_url" value="{{ old('image_url') }}" placeholder="https://..." class="w-full rounded-xl border-slate-200">
                    <p class="text-xs text-slate-500 mt-2">Isi URL hanya jika ingin mengganti gambar via link.</p>
                </div>
            </div>
            <div>
                <label class="block font-medium mb-2">Harga (Rp)</label>
                <input type="number" name="price" value="{{ old('price', $item->price) }}" class="w-full rounded-xl border-slate-200" min="0" step="1">
                @error('price')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block font-medium mb-2">Deskripsi</label>
                <textarea name="description" rows="3" class="w-full rounded-xl border-slate-200">{{ old('description', $item->description) }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block font-medium mb-2">Urutan (opsional)</label>
                    <input type="number" name="order" value="{{ old('order', $item->order) }}" class="w-full rounded-xl border-slate-200">
                </div>
                <div class="flex items-end">
                    <label class="inline-flex items-center gap-2">
                        <input type="checkbox" name="is_active" value="1" class="rounded border-slate-300 text-brand-600 focus:ring-brand-500" {{ old('is_active', $item->is_active) ? 'checked' : '' }}>
                        <span class="text-sm text-slate-700">Aktif</span>
                    </label>
                </div>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-medium">Simpan</button>
                <a href="{{ route('admin.drop-off-items.index') }}" class="px-6 py-2 bg-slate-200 rounded-xl hover:bg-slate-300">Batal</a>
            </div>
        </form>
    </div>
@endsection

