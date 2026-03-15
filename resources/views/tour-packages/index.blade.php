@extends('layouts.frontend')

@section('title', 'Paket Wisata - SMJ Rent')
@section('description', 'Paket wisata lokal dan internasional SMJ Rent. Bromo, Bali, Singapore dan destinasi populer lainnya. Harga spesial, pelayanan terbaik.')

@section('content')
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-emerald-600 font-semibold text-sm uppercase tracking-wider">Paket Wisata</span>
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 mt-2">Destinasi Impian Anda</h1>
                <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Pilih paket wisata favorit. Perjalanan nyaman dengan transportasi dan akomodasi terjamin.</p>
            </div>

            @if($packagesLokal->isNotEmpty())
            <div class="mb-20">
                <h2 class="text-2xl font-bold text-slate-900 mb-8">Paket Trip Lokal</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($packagesLokal as $package)
                    <a href="{{ route('tour-packages.show', $package->slug) }}" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="{{ image_url($package->image) }}" alt="{{ $package->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <span class="text-xs font-medium bg-white/20 px-2 py-1 rounded">{{ $package->duration }}</span>
                                <h3 class="text-xl font-bold mt-2">{{ $package->title }}</h3>
                                <p class="text-emerald-300 font-semibold text-lg">Rp {{ number_format($package->price, 0, ',', '.') }}/org</p>
                            </div>
                        </div>
                        <div class="p-4 flex items-center justify-between">
                            <span class="text-emerald-600 font-medium">Lihat Detail</span>
                            <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            @if($packagesInternasional->isNotEmpty())
            <div>
                <h2 class="text-2xl font-bold text-slate-900 mb-8">Paket Trip Internasional</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($packagesInternasional as $package)
                    <a href="{{ route('tour-packages.show', $package->slug) }}" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="{{ image_url($package->image) }}" alt="{{ $package->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <span class="text-xs font-medium bg-white/20 px-2 py-1 rounded">{{ $package->duration }}</span>
                                <h3 class="text-xl font-bold mt-2">{{ $package->title }}</h3>
                                <p class="text-emerald-300 font-semibold text-lg">Rp {{ number_format($package->price, 0, ',', '.') }}/org</p>
                            </div>
                        </div>
                        <div class="p-4 flex items-center justify-between">
                            <span class="text-emerald-600 font-medium">Lihat Detail</span>
                            <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            @if($packagesLokal->isEmpty() && $packagesInternasional->isEmpty())
            <div class="text-center py-16 text-slate-500">Belum ada paket wisata tersedia.</div>
            @endif
        </div>
    </section>
@endsection
