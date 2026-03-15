@extends('layouts.admin')

@section('title', 'Paket Wisata')
@section('header', 'Paket Wisata')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <p class="text-slate-500">Kelola paket wisata</p>
        <a href="{{ route('admin.tour-packages.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Tambah Paket</a>
    </div>
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="text-left px-6 py-4 font-semibold">Paket</th>
                    <th class="text-left px-6 py-4 font-semibold">Kategori</th>
                    <th class="text-left px-6 py-4 font-semibold">Harga</th>
                    <th class="text-right px-6 py-4 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($packages as $p)
                <tr class="border-t border-slate-100 hover:bg-slate-50/50">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ image_url($p->image) }}" alt="" class="w-12 h-12 rounded-lg object-cover">
                            <span class="font-medium">{{ $p->title }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 capitalize">{{ $p->category }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.tour-packages.edit', $p) }}" class="text-emerald-600 hover:underline mr-3">Edit</a>
                        <form action="{{ route('admin.tour-packages.destroy', $p) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="px-6 py-12 text-center text-slate-500">Belum ada paket.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
