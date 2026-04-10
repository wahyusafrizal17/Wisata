@extends('layouts.admin')

@section('title', 'Dokumentasi')
@section('header', 'Dokumentasi')

@section('content')
    <div class="max-w-3xl">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <form action="{{ route('admin.site-documentation.update') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-medium mb-2">Judul</label>
                    <input
                        type="text"
                        name="title"
                        value="{{ old('title', $documentation->title) }}"
                        class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500"
                        placeholder="Contoh: Dokumentasi Perjalanan"
                    />
                    @error('title')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium mb-2">Subjudul</label>
                    <input
                        type="text"
                        name="subtitle"
                        value="{{ old('subtitle', $documentation->subtitle) }}"
                        class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500"
                        placeholder="Contoh: Momen-momen indah dari perjalanan bersama SMJ Rent"
                    />
                    @error('subtitle')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium mb-2">Link Instagram</label>
                    <input
                        type="url"
                        name="instagram_url"
                        value="{{ old('instagram_url', $documentation->instagram_url) }}"
                        class="w-full rounded-xl border-slate-200 focus:border-brand-500 focus:ring-brand-500"
                        placeholder="https://instagram.com/..."
                    />
                    @error('instagram_url')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                    <p class="text-sm text-slate-500 mt-2">Jika kosong, tombol Instagram tidak akan tampil.</p>
                </div>

                <div class="flex items-center justify-end gap-3">
                    <button type="submit" class="px-5 py-2.5 bg-brand-600 text-white rounded-xl hover:bg-brand-700 font-semibold">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
        <p class="text-sm text-slate-500 mt-4">
            Perubahan akan tampil di halaman <strong>Dokumentasi</strong> (menu navbar).
        </p>
    </div>
@endsection

