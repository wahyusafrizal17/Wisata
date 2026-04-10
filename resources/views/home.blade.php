@extends('layouts.frontend')

@section('title', 'SMJ Rent - Rental Mobil & Paket Wisata Premium')
@section('description', 'PT. Sejahtera Mitra Jaya - Rental mobil premium, paket wisata Bromo, Bali, Singapore. Drop off bandara. Layanan transportasi aman, nyaman & terpercaya.')

@section('content')
    {{-- Hero Banner --}}
    <section class="relative min-h-[85vh] lg:min-h-[90vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ $banner?->image ? image_url($banner->image) : 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=1920&q=80' }}" alt="SMJ Rent" class="w-full h-full object-cover" loading="eager">
            <div class="absolute inset-0 bg-slate-900/60"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold tracking-tight mb-6">
                {{ $banner?->title ?? 'Perjalanan Nyaman Bersama SMJ Rent' }}
            </h1>
            <p class="text-xl lg:text-2xl text-slate-200 max-w-2xl mx-auto mb-10">
                {{ $banner?->subtitle ?? 'Rental mobil premium dengan layanan terbaik untuk perjalanan wisata & bisnis Anda' }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ whatsapp_booking_url('general', 'Booking') }}" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold rounded-xl transition-all duration-300 shadow-xl shadow-brand-600/25 hover:shadow-brand-600/35 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-brand-300/60 focus:ring-offset-2 focus:ring-offset-slate-900">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Booking WhatsApp
                </a>
            </div>
        </div>
    </section>

    {{-- Layanan Kami --}}
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Layanan Kami</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2">Solusi Transportasi Lengkap</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['icon' => 'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z', 'title' => 'Sewa Mobil dengan Sopir', 'desc' => 'Rental mobil plus driver profesional untuk perjalanan Anda'],
                    ['icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'title' => 'Perjalanan Dinas', 'desc' => 'Mobil untuk keperluan bisnis dan dinas kantor'],
                    ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0v.5a2.5 2.5 0 005 0V4a2 2 0 012-2h2.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Perjalanan Wisata', 'desc' => 'Paket wisata lengkap ke destinasi populer'],
                    ['icon' => 'M12 19l9 2-9-18-9 18 9-2zm0 0v-8', 'title' => 'Antar Jemput Bandara', 'desc' => 'Drop off & pick up bandara tepat waktu'],
                ] as $service)
                <div class="group p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-slate-100">
                    <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-6 group-hover:bg-brand-600 transition-colors">
                        <svg class="w-7 h-7 text-brand-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">{{ $service['title'] }}</h3>
                    <p class="text-slate-500 text-sm">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Keunggulan --}}
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-brand-600 to-brand-400 flex items-center justify-center mb-6 shadow-lg shadow-brand-600/25 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Armada Bersih & Terawat</h3>
                    <p class="text-slate-500">Semua unit mobil kami dijaga kebersihan dan kondisi prima</p>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-brand-600 to-brand-400 flex items-center justify-center mb-6 shadow-lg shadow-brand-600/25 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Driver Profesional</h3>
                    <p class="text-slate-500">Sopir berpengalaman, ramah, dan mengutamakan keselamatan</p>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-brand-600 to-brand-400 flex items-center justify-center mb-6 shadow-lg shadow-brand-600/25 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Pelayanan Responsif</h3>
                    <p class="text-slate-500">Respon cepat untuk setiap kebutuhan booking Anda</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Profil --}}
    <section id="about" class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Profil</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2 mb-6">SMJ Rent</h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        {{ $profile?->description ?: 'SMJ Rent adalah PT. Sejahtera Mitra Jaya penyedia layanan rental mobil yang hadir untuk memberikan solusi transportasi yang aman, nyaman dan terpercaya.' }}
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="flex gap-4 p-4 rounded-xl bg-slate-50 hover:bg-brand-50 transition-colors group">
                            <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center group-hover:bg-brand-200 transition-colors">
                                <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Aman & Terpercaya</h4>
                                <p class="text-sm text-slate-500">Layanan profesional</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 rounded-xl bg-slate-50 hover:bg-brand-50 transition-colors group">
                            <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center group-hover:bg-brand-200 transition-colors">
                                <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Nyaman</h4>
                                <p class="text-sm text-slate-500">Armada terawat</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 rounded-xl bg-slate-50 hover:bg-brand-50 transition-colors group">
                            <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center group-hover:bg-brand-200 transition-colors">
                                <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Tepat Waktu</h4>
                                <p class="text-sm text-slate-500">Selalu on time</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 rounded-xl bg-slate-50 hover:bg-brand-50 transition-colors group">
                            <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center group-hover:bg-brand-200 transition-colors">
                                <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Responsif</h4>
                                <p class="text-sm text-slate-500">24/7 support</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ $profile?->photo ? image_url($profile->photo) : 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=800&q=80' }}" alt="SMJ Rent" class="rounded-2xl shadow-2xl" loading="lazy">
                    <div class="absolute -bottom-6 -right-6 bg-brand-600 text-white p-6 rounded-2xl shadow-xl">
                        <span class="text-4xl font-bold">10+</span>
                        <p class="text-sm opacity-90">Tahun Pengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Preview Pricelist (Armada) --}}
    @if($cars->isNotEmpty())
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-12">
                <div>
                    <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Pricelist</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2">Pilihan Mobil</h2>
                </div>
                <a href="{{ route('cars.index') }}" class="text-brand-600 font-semibold hover:text-brand-700 flex items-center gap-2">
                    Lihat Pricelist <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($cars as $car)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-slate-100">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="{{ image_url($car->image) }}" alt="{{ $car->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded-full text-sm font-semibold text-slate-800">{{ $car->capacity }} orang</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-1">{{ $car->name }}</h3>
                        <p class="text-brand-600 font-bold text-lg">Rp {{ number_format($car->price, 0, ',', '.') }}/hari</p>
                        <a href="{{ whatsapp_booking_url('mobil', $car->name) }}" target="_blank" class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-brand-600 to-brand-500 text-white text-sm font-medium rounded-lg hover:from-brand-700 hover:to-brand-600 transition-colors">
                            Booking WhatsApp
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Preview Paket Wisata --}}
    @if($packages->isNotEmpty())
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-12">
                <div>
                    <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Paket Wisata</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2">Destinasi Populer</h2>
                </div>
                <a href="{{ route('tour-packages.index') }}" class="text-brand-600 font-semibold hover:text-brand-700 flex items-center gap-2">
                    Lihat Semua <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($packages as $package)
                <a href="{{ route('tour-packages.show', $package->slug) }}" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="{{ image_url($package->image) }}" alt="{{ $package->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-xs font-medium bg-white/20 px-2 py-1 rounded">{{ $package->duration }}</span>
                            <h3 class="text-lg font-bold mt-2">{{ $package->title }}</h3>
                            <p class="text-brand-200 font-semibold">Rp {{ number_format($package->price, 0, ',', '.') }}/org</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <span class="text-brand-600 font-medium text-sm">Lihat Detail →</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @php($contact = array_merge([
        'whatsapp' => config('smj.whatsapp'),
        'email' => config('smj.email'),
        'address' => config('smj.address'),
        'instagram' => config('smj.instagram'),
        'linktree' => config('smj.linktree'),
    ], site_setting('contact', [])))

    {{-- Drop Off Bandara --}}
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
                <div>
                    <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Drop Off Bandara</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2">{{ site_setting('drop-off', [])['title'] ?? 'Antar Jemput Bandara' }}</h2>
                    <p class="text-slate-600 text-lg mt-4 max-w-2xl">{{ site_setting('drop-off', [])['subtitle'] ?? 'Layanan antar jemput bandara yang aman, nyaman, dan tepat waktu' }}</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('drop-off.index') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 bg-slate-900 text-white font-semibold rounded-xl hover:bg-slate-800 transition-colors">
                        Lihat Drop Off <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ whatsapp_booking_url('drop_off', 'Drop Off Bandara') }}" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-7 py-4 bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold rounded-xl hover:from-brand-700 hover:to-brand-600 transition-colors">
                        Booking WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Dokumentasi --}}
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
                <div>
                    <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Dokumentasi</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2">Galeri Perjalanan</h2>
                    <p class="text-slate-600 text-lg mt-4 max-w-2xl">Lihat momen terbaik perjalanan, armada, dan dokumentasi kegiatan bersama pelanggan kami.</p>
                </div>
                <a href="{{ route('gallery.index') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 bg-white text-slate-900 font-semibold rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors">
                    Lihat Dokumentasi <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Kontak --}}
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Kontak</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2">Hubungi Kami</h2>
                    <p class="text-slate-600 text-lg mt-4">Butuh info cepat? Hubungi kami via WhatsApp atau lihat detail kontak lengkap.</p>
                    <div class="mt-8 space-y-2 text-slate-700">
                        @if(!empty($contact['whatsapp']))
                            <div class="font-medium">WhatsApp: <span class="text-slate-600">{{ $contact['whatsapp'] }}</span></div>
                        @endif
                        @if(!empty($contact['email']))
                            <div class="font-medium">Email: <span class="text-slate-600">{{ $contact['email'] }}</span></div>
                        @endif
                        @if(!empty($contact['address']))
                            <div class="font-medium">Alamat: <span class="text-slate-600">{{ $contact['address'] }}</span></div>
                        @endif
                    </div>
                    <div class="mt-10 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('contact.index') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 bg-slate-900 text-white font-semibold rounded-xl hover:bg-slate-800 transition-colors">
                            Buka Halaman Kontak <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="{{ whatsapp_booking_url('general', 'Booking') }}" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-7 py-4 bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold rounded-xl hover:from-brand-700 hover:to-brand-600 transition-colors">
                            Chat WhatsApp
                        </a>
                    </div>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-8">
                    <h3 class="text-xl font-bold text-slate-900">Jam Operasional</h3>
                    <p class="text-slate-600 mt-2">Setiap hari. Respon cepat untuk booking & konsultasi perjalanan.</p>
                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div class="rounded-xl bg-white border border-slate-200 p-4">
                            <div class="text-sm text-slate-500">Layanan</div>
                            <div class="font-semibold text-slate-900 mt-1">Rental & Wisata</div>
                        </div>
                        <div class="rounded-xl bg-white border border-slate-200 p-4">
                            <div class="text-sm text-slate-500">Respon</div>
                            <div class="font-semibold text-slate-900 mt-1">WhatsApp</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    @if($testimonials->isNotEmpty())
    <section class="py-20 lg:py-28 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-200 font-semibold text-sm uppercase tracking-wider">Testimoni</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-white mt-2">Apa Kata Pelanggan Kami</h2>
            </div>
            <div
                x-data="{
                    current: 0,
                    total: {{ $testimonials->count() }},
                    timer: null,
                    intervalMs: 2000,
                    start() {
                        if (this.total <= 1) return;
                        this.stop();
                        this.timer = setInterval(() => this.next(), this.intervalMs);
                    },
                    stop() {
                        if (this.timer) {
                            clearInterval(this.timer);
                            this.timer = null;
                        }
                    },
                    next() {
                        this.current = (this.current + 1) % this.total;
                    },
                    go(i) {
                        this.current = i;
                        this.start();
                    },
                }"
                x-init="start()"
                @mouseenter="stop()"
                @mouseleave="start()"
                class="relative"
            >
                @foreach($testimonials as $index => $t)
                <div x-show="current === {{ $index }}" x-transition class="max-w-3xl mx-auto text-center">
                    <img src="{{ image_url($t->photo) }}" alt="{{ $t->name }}" class="w-20 h-20 rounded-full mx-auto mb-6 object-cover border-4 border-brand-500" loading="lazy">
                    <p class="text-xl text-slate-300 italic mb-6">"{{ $t->message }}"</p>
                    <p class="font-semibold text-white">{{ $t->name }}</p>
                </div>
                @endforeach
                <div class="flex justify-center gap-2 mt-10">
                    @foreach($testimonials as $index => $t)
                    <button @click="go({{ $index }})" :class="current === {{ $index }} ? 'bg-brand-500 w-8' : 'bg-slate-600 w-2'" class="h-2 rounded-full transition-all duration-300"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    {{-- CTA Section --}}
    <section class="py-20 lg:py-28 bg-gradient-to-br from-brand-700 via-brand-600 to-brand-500">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">{{ site_setting('home', [])['cta_title'] ?? 'Siap Berangkat Bersama Kami?' }}</h2>
            <p class="text-xl text-brand-100 mb-10">{{ site_setting('home', [])['cta_subtitle'] ?? 'Pesan sekarang melalui WhatsApp untuk kemudahan booking' }}</p>
            <a href="{{ whatsapp_booking_url('general', 'Booking') }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-brand-700 font-bold rounded-xl hover:bg-slate-50 transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-1">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                {{ site_setting('home', [])['cta_button_text'] ?? 'Booking via WhatsApp' }}
            </a>
        </div>
    </section>
@endsection
