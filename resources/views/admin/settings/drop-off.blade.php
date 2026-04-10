@extends('layouts.admin')

@section('title', 'Drop Off Bandara')
@section('header', 'Drop Off Bandara')

@section('content')
    <div class="max-w-3xl">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <form action="{{ route('admin.settings.update', 'drop-off') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-medium mb-2">Badge</label>
                    <input type="text" name="badge" value="{{ old('badge', $settings['badge'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Drop Off Bandara">
                </div>

                <div>
                    <label class="block font-medium mb-2">Judul</label>
                    <input type="text" name="title" value="{{ old('title', $settings['title'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Drop Off Bandara">
                </div>

                <div>
                    <label class="block font-medium mb-2">Subjudul</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle', $settings['subtitle'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Layanan antar jemput bandara yang aman, nyaman, dan tepat waktu">
                </div>

                <div>
                    <label class="block font-medium mb-2">Teks Intro</label>
                    <textarea name="intro_text" rows="4" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Tulis deskripsi singkat...">{{ old('intro_text', $settings['intro_text'] ?? '') }}</textarea>
                </div>

                <div>
                    <label class="block font-medium mb-2">Teks Tombol</label>
                    <input type="text" name="button_text" value="{{ old('button_text', $settings['button_text'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Pesan Sekarang">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-5 py-2.5 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-semibold">Simpan</button>
                </div>
            </form>
        </div>
        <p class="text-sm text-slate-500 mt-4">List layanan Drop Off dikelola dari menu <span class="font-medium text-slate-700">Drop Off (List)</span>.</p>
    </div>
@endsection

