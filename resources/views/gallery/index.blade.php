@extends('layouts.frontend')

@section('title', 'Galeri Dokumentasi - SMJ Rent')
@section('description', 'Galeri foto perjalanan dan dokumentasi SMJ Rent. Lihat momen perjalanan bersama kami.')

@section('content')
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-emerald-600 font-semibold text-sm uppercase tracking-wider">Galeri</span>
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 mt-2">Dokumentasi Perjalanan</h1>
                <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Momen-momen indah dari perjalanan bersama SMJ Rent</p>
                @if(config('smj.instagram'))
                <a href="{{ config('smj.instagram') }}" target="_blank" class="inline-flex items-center gap-2 mt-6 text-emerald-600 font-semibold hover:text-emerald-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    Follow us on Instagram
                </a>
                @endif
            </div>

            <div x-data="{ lightbox: null }" class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                @forelse($galleries as $gallery)
                <div class="break-inside-avoid group cursor-pointer" @click="lightbox = '{{ image_url($gallery->image) }}'">
                    <div class="relative overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300">
                        <img src="{{ image_url($gallery->image) }}" alt="{{ $gallery->title ?? 'Gallery' }}" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                        </div>
                        @if($gallery->title)
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent text-white text-sm font-medium">
                            {{ $gallery->title }}
                        </div>
                        @endif
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-16 text-slate-500">Belum ada galeri tersedia.</div>
                @endforelse
            </div>

            {{-- Lightbox --}}
            <div x-show="lightbox" x-cloak @click="lightbox = null" class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4" style="display: none;">
                <img :src="lightbox" @click.stop class="max-w-full max-h-full object-contain rounded-lg" alt="Preview">
            </div>
        </div>
    </section>
@endsection
