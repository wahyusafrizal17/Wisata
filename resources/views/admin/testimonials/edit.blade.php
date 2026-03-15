@extends('layouts.admin')

@section('title', 'Edit Testimoni')
@section('header', 'Edit Testimoni')

@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow-sm">
            @csrf @method('PUT')
            <div>
                <label class="block font-medium mb-2">Nama</label>
                <input type="text" name="name" value="{{ old('name', $testimonial->name) }}" required class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Pesan</label>
                <textarea name="message" rows="4" required class="w-full border border-slate-200 rounded-xl px-4 py-2">{{ old('message', $testimonial->message) }}</textarea>
            </div>
            @if($testimonial->photo)
            <div>
                <label class="block font-medium mb-2">Foto saat ini</label>
                <img src="{{ image_url($testimonial->photo) }}" alt="" class="w-16 h-16 rounded-full object-cover">
            </div>
            @endif
            <div>
                <label class="block font-medium mb-2">Foto baru (upload)</label>
                <input type="file" name="photo" accept="image/*" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Atau URL Foto</label>
                <input type="url" name="photo_url" value="{{ old('photo_url', str_starts_with($testimonial->photo ?? '', 'http') ? $testimonial->photo : '') }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div>
                <label class="block font-medium mb-2">Urutan</label>
                <input type="number" name="order" value="{{ old('order', $testimonial->order) }}" class="w-full border border-slate-200 rounded-xl px-4 py-2">
            </div>
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Simpan</button>
                <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2 bg-slate-200 rounded-xl hover:bg-slate-300">Batal</a>
            </div>
        </form>
    </div>
@endsection
