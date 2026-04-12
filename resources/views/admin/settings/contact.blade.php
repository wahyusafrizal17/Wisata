@extends('layouts.admin')

@section('title', 'Kontak')
@section('header', 'Kontak')

@section('content')
    <div class="max-w-3xl">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <form action="{{ route('admin.settings.update', 'contact') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block font-medium mb-2">WhatsApp</label>
                        <input type="text" name="whatsapp" value="{{ old('whatsapp', $settings['whatsapp'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="http://wa.me/6282216922550 atau 6282216922550">
                        <p class="text-sm text-slate-500 mt-2">Bisa nomor (628&hellip;) atau link penuh <code class="text-xs bg-slate-100 px-1 rounded">wa.me</code>.</p>
                    </div>
                    <div>
                        <label class="block font-medium mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email', $settings['email'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="info@smjrent.com">
                    </div>
                </div>

                <div>
                    <label class="block font-medium mb-2">Alamat</label>
                    <input type="text" name="address" value="{{ old('address', $settings['address'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="Jakarta, Indonesia">
                </div>

                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block font-medium mb-2">Instagram URL</label>
                        <input type="url" name="instagram" value="{{ old('instagram', $settings['instagram'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="https://www.instagram.com/...">
                    </div>
                    <div>
                        <label class="block font-medium mb-2">Facebook URL</label>
                        <input type="url" name="facebook" value="{{ old('facebook', $settings['facebook'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="https://www.facebook.com/...">
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block font-medium mb-2">TikTok URL</label>
                        <input type="url" name="tiktok" value="{{ old('tiktok', $settings['tiktok'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="https://www.tiktok.com/@...">
                    </div>
                    <div>
                        <label class="block font-medium mb-2">Linktree URL</label>
                        <input type="url" name="linktree" value="{{ old('linktree', $settings['linktree'] ?? '') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="https://linktr.ee/...">
                    </div>
                </div>

                <div>
                    <label class="block font-medium mb-2">Tiket.com URL</label>
                    <input type="url" name="tiket_url" value="{{ old('tiket_url', $settings['tiket_url'] ?? 'https://www.tiket.com/') }}" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="https://www.tiket.com/">
                    <p class="text-sm text-slate-500 mt-2">Link ini dipakai untuk logo tiket.com di footer.</p>
                </div>

                <div>
                    <label class="block font-medium mb-2">Google Maps Embed (iframe)</label>
                    <textarea name="maps_embed" rows="5" class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500" placeholder="<iframe ...></iframe>">{{ old('maps_embed', $settings['maps_embed'] ?? '') }}</textarea>
                    <p class="text-sm text-slate-500 mt-2">Jika kosong, halaman kontak akan menampilkan placeholder.</p>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-5 py-2.5 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-semibold">Simpan</button>
                </div>
            </form>
        </div>
        <p class="text-sm text-slate-500 mt-4">Pengaturan ini dipakai untuk halaman <strong>Kontak</strong> dan juga informasi di <strong>Footer</strong>.</p>
    </div>
@endsection

