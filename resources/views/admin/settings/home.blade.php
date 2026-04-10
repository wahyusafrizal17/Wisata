@extends('layouts.admin')

@section('title', 'Home')
@section('header', 'Home')

@section('content')
    <div class="max-w-3xl">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <form action="{{ route('admin.settings.update', 'home') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-medium mb-2">Judul CTA (bagian bawah)</label>
                    <input type="text" name="cta_title" value="{{ old('cta_title', $settings['cta_title'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Siap Berangkat Bersama Kami?">
                </div>

                <div>
                    <label class="block font-medium mb-2">Subjudul CTA</label>
                    <input type="text" name="cta_subtitle" value="{{ old('cta_subtitle', $settings['cta_subtitle'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Pesan sekarang melalui WhatsApp untuk kemudahan booking">
                </div>

                <div>
                    <label class="block font-medium mb-2">Teks tombol CTA</label>
                    <input type="text" name="cta_button_text" value="{{ old('cta_button_text', $settings['cta_button_text'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Booking via WhatsApp">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-5 py-2.5 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-semibold">Simpan</button>
                </div>
            </form>
        </div>
        <p class="text-sm text-slate-500 mt-4">Catatan: Banner hero tetap dikelola melalui menu <strong>Banner</strong>.</p>
    </div>
@endsection

