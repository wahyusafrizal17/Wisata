@extends('layouts.frontend')

@section('title', 'Pricelist Armada - SMJ Rent')
@section('description', 'Daftar harga rental mobil SMJ Rent. Toyota Avanza, Innova, Hiace dan armada lainnya. Harga terjangkau, layanan premium.')

@section('content')
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                @php($pricelist = site_setting('pricelist', []))
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">{{ $pricelist['badge'] ?? 'Pricelist' }}</span>
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 mt-2">{{ $pricelist['title'] ?? 'Armada Mobil Kami' }}</h1>
                <p class="text-slate-600 mt-4 max-w-2xl mx-auto">{{ $pricelist['subtitle'] ?? 'Pilih mobil yang sesuai kebutuhan perjalanan Anda. Semua harga include sopir profesional.' }}</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($cars as $car)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-slate-100">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="{{ image_url($car->image) }}" alt="{{ $car->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute top-4 right-4 bg-white/95 px-3 py-1.5 rounded-xl text-sm font-semibold text-slate-800 shadow">{{ $car->capacity }} orang</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $car->name }}</h3>
                        <p class="text-brand-600 font-bold text-2xl mb-3">Rp {{ number_format($car->price, 0, ',', '.') }}/hari</p>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">{{ $car->description }}</p>
                        <a href="{{ whatsapp_booking_url('mobil', $car->name) }}" target="_blank" class="inline-flex items-center justify-center gap-2 w-full py-3 bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold rounded-xl hover:from-brand-700 hover:to-brand-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Booking WhatsApp
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-16 text-slate-500">
                    Belum ada armada tersedia. Silakan cek kembali nanti.
                </div>
                @endforelse
            </div>

            <div class="mt-10 max-w-4xl">
                <h3 class="text-3xl font-black tracking-tight text-slate-900">NOTES</h3>
                <ul class="mt-3 space-y-4 text-slate-700">
                    <li class="flex items-start gap-3" style="margin-top: 5px;">
                        <span class="mt-0.5 text-lg" aria-hidden="true">📌</span>
                        <span>Harga dapat berubah saat high season, hari libur, atau kondisi tertentu</span>
                    </li>
                    <li class="flex items-start gap-3" style="margin-top: 5px;">
                        <span class="mt-0.5 text-lg" aria-hidden="true">📌</span>
                        <span>Tarif juga dapat menyesuaikan berdasarkan durasi sewa dan kesepakatan</span>
                    </li>
                    <li class="flex items-start gap-3" style="margin-top: 5px;">
                        <span class="mt-0.5 text-lg" aria-hidden="true">📌</span>
                        <span>Untuk mendapatkan informasi harga terbaru dan penawaran terbaik, silahkan hubungi admin resmi SMJ Rent</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
