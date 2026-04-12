<footer class="bg-slate-50 text-slate-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            @php($contact = array_merge([
                'whatsapp' => config('smj.whatsapp'),
                'email' => config('smj.email'),
                'address' => config('smj.address'),
                'instagram' => config('smj.instagram'),
                'facebook' => config('smj.facebook'),
                'tiktok' => config('smj.tiktok'),
                'linktree' => config('smj.linktree'),
            ], site_setting('contact', [])))

            <div>
                <a href="{{ route('home') }}" class="inline-flex items-center">
                    <img
                        src="{{ asset('logo.png') }}"
                        alt="SMJ Rent"
                        class="h-10 w-auto"
                        loading="lazy"
                        decoding="async"
                        style="width: 80px;height: 80px;"
                    >
                </a>
                <p class="mt-4 text-slate-500 text-sm leading-relaxed">
                    PT. Sejahtera Mitra Jaya - Penyedia layanan rental mobil premium dengan layanan terbaik untuk perjalanan Anda.
                </p>
            </div>

            <div>
                <h4 class="font-semibold text-slate-900 mb-4">Navigasi</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="hover:text-brand-700 transition-colors">Home</a></li>
                    <li><a href="{{ url('/profil') }}" class="hover:text-brand-700 transition-colors">Profil</a></li>
                    <li><a href="{{ route('cars.index') }}" class="hover:text-brand-700 transition-colors">Pricelist</a></li>
                    <li><a href="{{ route('tour-packages.index') }}" class="hover:text-brand-700 transition-colors">Paket Wisata</a></li>
                    <li><a href="{{ route('drop-off.index') }}" class="hover:text-brand-700 transition-colors">Drop Off Bandara</a></li>
                    <li><a href="{{ route('gallery.index') }}" class="hover:text-brand-700 transition-colors">Dokumentasi</a></li>
                    <li><a href="{{ route('contact.index') }}" class="hover:text-brand-700 transition-colors">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-slate-900 mb-4">Kontak</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ whatsapp_contact_href($contact['whatsapp'] ?? '') }}" target="_blank" rel="noopener" class="flex items-center gap-2 hover:text-brand-700 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            WhatsApp
                        </a>
                    </li>
                    <li><a href="mailto:{{ $contact['email'] ?? '' }}" class="hover:text-brand-700 transition-colors">{{ $contact['email'] ?? '' }}</a></li>
                    <li class="text-slate-500">{{ $contact['address'] ?? '' }}</li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-slate-900 mb-4">Sosial Media</h4>
                <ul class="flex flex-wrap gap-3 list-none p-0 m-0">
                    <li>
                    <a href="{{ trim((string) ($contact['instagram'] ?? '')) ?: 'https://www.instagram.com/smjtourtravel' }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram" title="Instagram" class="w-10 h-10 shrink-0 rounded-full bg-white ring-1 ring-slate-200 flex items-center justify-center text-slate-700 hover:bg-brand-600 hover:text-white hover:ring-brand-600 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    </li>
                    <li>
                    <a href="{{ trim((string) ($contact['facebook'] ?? '')) ?: 'https://www.facebook.com/SMJTour' }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook" class="w-10 h-10 shrink-0 rounded-full bg-white ring-1 ring-slate-200 flex items-center justify-center text-slate-700 hover:bg-brand-600 hover:text-white hover:ring-brand-600 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.691V11.09h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24h-1.918c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.65h-3.12V24h6.116C23.407 24 24 23.408 24 22.676V1.324C24 .593 23.408 0 22.676 0z"/></svg>
                    </a>
                    </li>
                    <li>
                    <a href="{{ trim((string) ($contact['tiktok'] ?? '')) ?: 'https://www.tiktok.com/@smjtourtravel' }}" target="_blank" rel="noopener noreferrer" aria-label="TikTok" title="TikTok" class="w-10 h-10 shrink-0 rounded-full bg-white ring-1 ring-slate-200 flex items-center justify-center text-slate-700 hover:bg-brand-600 hover:text-white hover:ring-brand-600 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/></svg>
                    </a>
                    </li>
                    <li>
                    <a href="{{ trim((string) ($contact['linktree'] ?? '')) ?: 'https://linktr.ee/SMJRent' }}" target="_blank" rel="noopener noreferrer" aria-label="Linktree" title="Linktree" class="w-10 h-10 shrink-0 rounded-full bg-white ring-1 ring-slate-200 flex items-center justify-center text-slate-700 hover:bg-brand-600 hover:text-white hover:ring-brand-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                    </a>
                    </li>
                </ul>
                <a
                    href="{{ $contact['tiket_url'] ?? 'https://www.tiket.com/' }}"
                    target="_blank"
                    rel="noopener"
                    aria-label="Buka tiket.com"
                    class="mt-5 inline-flex items-center gap-3 rounded-xl bg-slate-900 px-4 py-3 ring-1 ring-slate-200/70 transition hover:bg-slate-800 hover:ring-slate-300"
                >
                    <img
                        src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/test-discovery/2024/03/01/8ebd3ae4-f545-4809-ac73-ed0fd7434377-1709290197649-a6b320e89d9f213b43896d34a3725b18.png"
                        alt="tiket.com"
                        class="h-8 w-auto"
                        loading="lazy"
                        decoding="async"
                    >
                </a>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-2 text-slate-500 text-sm">
            <span>© {{ date('Y') }} SMJ Rent. All rights reserved.</span>
            <a href="{{ route('login') }}" class="hover:text-slate-700">Admin</a>
        </div>
    </div>
</footer>
