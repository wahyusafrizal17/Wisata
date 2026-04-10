@extends('layouts.admin')

@section('title', 'Pricelist')
@section('header', 'Pricelist')

@section('content')
    <div class="max-w-3xl">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <form action="{{ route('admin.settings.update', 'pricelist') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-medium mb-2">Badge</label>
                    <input type="text" name="badge" value="{{ old('badge', $settings['badge'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Pricelist">
                </div>

                <div>
                    <label class="block font-medium mb-2">Judul</label>
                    <input type="text" name="title" value="{{ old('title', $settings['title'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Armada Mobil Kami">
                </div>

                <div>
                    <label class="block font-medium mb-2">Subjudul</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle', $settings['subtitle'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Pilih mobil yang sesuai kebutuhan perjalanan Anda...">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-5 py-2.5 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-semibold">Simpan</button>
                </div>
            </form>
        </div>
        <p class="text-sm text-slate-500 mt-4">Daftar mobil dikelola melalui menu <strong>Mobil</strong>.</p>
    </div>
@endsection

