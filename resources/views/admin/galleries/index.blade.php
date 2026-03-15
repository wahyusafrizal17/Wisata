@extends('layouts.admin')

@section('title', 'Galeri')
@section('header', 'Galeri')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <p class="text-slate-500">Kelola galeri foto</p>
        <a href="{{ route('admin.galleries.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Tambah Foto</a>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @forelse($galleries as $g)
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <img src="{{ image_url($g->image) }}" alt="" class="w-full aspect-square object-cover">
            <div class="p-4 flex justify-between items-center">
                <span class="text-sm truncate">{{ $g->title ?? '-' }}</span>
                <div>
                    <a href="{{ route('admin.galleries.edit', $g) }}" class="text-emerald-600 text-sm hover:underline">Edit</a>
                    <form action="{{ route('admin.galleries.destroy', $g) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 text-sm hover:underline">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12 text-slate-500">Belum ada galeri.</div>
        @endforelse
    </div>
@endsection
