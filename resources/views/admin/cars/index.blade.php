@extends('layouts.admin')

@section('title', 'Mobil')
@section('header', 'Mobil')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <p class="text-slate-500">Kelola daftar armada mobil</p>
        <a href="{{ route('admin.cars.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded-xl hover:bg-emerald-700 font-medium">Tambah Mobil</a>
    </div>
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="text-left px-6 py-4 font-semibold">Mobil</th>
                    <th class="text-left px-6 py-4 font-semibold">Harga</th>
                    <th class="text-left px-6 py-4 font-semibold">Kapasitas</th>
                    <th class="text-right px-6 py-4 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cars as $car)
                <tr class="border-t border-slate-100 hover:bg-slate-50/50">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ image_url($car->image) }}" alt="" class="w-12 h-12 rounded-lg object-cover">
                            <span class="font-medium">{{ $car->name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">Rp {{ number_format($car->price, 0, ',', '.') }}/hari</td>
                    <td class="px-6 py-4">{{ $car->capacity }} orang</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.cars.edit', $car) }}" class="text-emerald-600 hover:underline mr-3">Edit</a>
                        <form action="{{ route('admin.cars.destroy', $car) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="px-6 py-12 text-center text-slate-500">Belum ada mobil.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
