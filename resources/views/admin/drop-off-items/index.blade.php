@extends('layouts.admin')

@section('title', 'Drop Off Bandara')
@section('header', 'Drop Off Bandara')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <p class="text-slate-500">Kelola list item Drop Off Bandara</p>
        <a href="{{ route('admin.drop-off-items.create') }}" class="px-4 py-2 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-medium">Tambah Item</a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="text-left px-6 py-4 font-semibold">Gambar</th>
                    <th class="text-left px-6 py-4 font-semibold">Judul</th>
                    <th class="text-left px-6 py-4 font-semibold">Harga</th>
                    <th class="text-left px-6 py-4 font-semibold">Status</th>
                    <th class="text-right px-6 py-4 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                <tr class="border-t border-slate-100 hover:bg-slate-50/50">
                    <td class="px-6 py-4">
                        <img src="{{ image_url($item->image ?: 'logo.png') }}" alt="{{ $item->title }}" class="w-16 h-12 rounded-xl object-cover border border-slate-100">
                    </td>
                    <td class="px-6 py-4">
                        <div class="font-medium">{{ $item->title }}</div>
                        @if($item->description)
                            <div class="text-sm text-slate-500 mt-1">{{ Str::limit($item->description, 80) }}</div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if(!is_null($item->price))
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        @else
                            <span class="text-slate-400">-</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2 py-1 rounded-lg text-xs font-semibold {{ $item->is_active ? 'bg-brand-100 text-brand-800' : 'bg-slate-100 text-slate-600' }}">
                            {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.drop-off-items.edit', $item) }}" class="text-brand-600 hover:underline mr-3">Edit</a>
                        <form action="{{ route('admin.drop-off-items.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="px-6 py-12 text-center text-slate-500">Belum ada item.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

