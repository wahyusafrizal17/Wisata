@extends('layouts.admin')

@section('title', 'Banner')
@section('header', 'Banner')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <p class="text-slate-500">Kelola banner hero homepage</p>
        <a href="{{ route('admin.banners.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Tambah Banner</a>
    </div>
    <div class="space-y-6">
        @forelse($banners as $b)
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden flex">
            <img src="{{ image_url($b->image) }}" alt="" class="w-64 h-40 object-cover shrink-0">
            <div class="p-6 flex-1 flex justify-between items-center">
                <div>
                    <h3 class="font-semibold">{{ $b->title }}</h3>
                    <p class="text-slate-500 text-sm">{{ $b->subtitle }}</p>
                    <span class="inline-block mt-2 px-2 py-0.5 rounded text-xs {{ $b->is_active ? 'bg-emerald-100 text-emerald-700' : 'bg-slate-100 text-slate-500' }}">
                        {{ $b->is_active ? 'Aktif' : 'Nonaktif' }}
                    </span>
                </div>
                <div>
                    <a href="{{ route('admin.banners.edit', $b) }}" class="text-emerald-600 hover:underline mr-3">Edit</a>
                    <form action="{{ route('admin.banners.destroy', $b) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="text-center py-12 text-slate-500">Belum ada banner.</div>
        @endforelse
    </div>
@endsection
