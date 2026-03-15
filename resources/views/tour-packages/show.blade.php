@extends('layouts.frontend')

@section('title', $package->title . ' - SMJ Rent')
@section('description', Str::limit($package->description, 160))
@section('og_title', $package->title . ' - SMJ Rent')

@section('content')
    <section class="py-16 lg:py-24">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ image_url($package->image) }}" alt="{{ $package->title }}" class="w-full aspect-[4/3] object-cover" loading="lazy">
                </div>
                <div>
                    <span class="text-emerald-600 font-semibold text-sm uppercase">{{ $package->category }}</span>
                    <h1 class="text-3xl lg:text-4xl font-bold text-slate-900 mt-2 mb-4">{{ $package->title }}</h1>
                    <div class="flex gap-4 mb-6">
                        <span class="px-4 py-2 bg-slate-100 rounded-lg">{{ $package->duration }}</span>
                        <span class="text-2xl font-bold text-emerald-600">Rp {{ number_format($package->price, 0, ',', '.') }}/org</span>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-8">{{ $package->description }}</p>

                    @if($package->facilities && count($package->facilities) > 0)
                    <div class="mb-8">
                        <h3 class="font-semibold text-slate-900 mb-3">Fasilitas</h3>
                        <ul class="space-y-2">
                            @foreach($package->facilities as $facility)
                            <li class="flex items-center gap-2 text-slate-600">
                                <svg class="w-5 h-5 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                {{ $facility }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <a href="{{ whatsapp_booking_url('paket', $package->title) }}" target="_blank" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors shadow-lg shadow-emerald-500/25">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Pesan via WhatsApp
                    </a>
                </div>
            </div>

            @if($package->itinerary)
            <div class="mt-16 p-8 bg-slate-50 rounded-2xl">
                <h2 class="text-2xl font-bold text-slate-900 mb-6">Itinerary</h2>
                <div class="prose prose-slate max-w-none whitespace-pre-line">{{ $package->itinerary }}</div>
            </div>
            @endif
        </div>
    </section>
@endsection
