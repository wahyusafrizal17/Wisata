@extends('layouts.admin')

@section('title', 'Testimoni')
@section('header', 'Testimoni')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <p class="text-slate-500">Kelola testimoni pelanggan</p>
        <a href="{{ route('admin.testimonials.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Tambah Testimoni</a>
    </div>
    <div class="space-y-6">
        @forelse($testimonials as $t)
        <div class="bg-white rounded-2xl shadow-sm p-6 flex gap-6">
            <img src="{{ image_url($t->photo) }}" alt="" class="w-16 h-16 rounded-full object-cover shrink-0">
            <div class="flex-1">
                <h3 class="font-semibold">{{ $t->name }}</h3>
                <p class="text-slate-500 text-sm mt-1">{{ Str::limit($t->message, 150) }}</p>
            </div>
            <div>
                <a href="{{ route('admin.testimonials.edit', $t) }}" class="text-emerald-600 hover:underline mr-3">Edit</a>
                <form action="{{ route('admin.testimonials.destroy', $t) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                </form>
            </div>
        </div>
        @empty
        <div class="text-center py-12 text-slate-500">Belum ada testimoni.</div>
        @endforelse
    </div>
@endsection
