<nav x-data="{ open: false }" class="sticky top-0 z-50 w-full bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 lg:h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <span class="text-xl font-bold tracking-tight text-slate-900">SMJ <span class="text-emerald-600">Rent</span></span>
                </a>

                <div class="hidden lg:flex lg:ml-12 lg:gap-8">
                    <a href="{{ route('home') }}#about" class="text-slate-600 hover:text-emerald-600 transition-colors font-medium">Home</a>
                    <a href="{{ route('home') }}#about" class="text-slate-600 hover:text-emerald-600 transition-colors font-medium">Tentang</a>
                    <a href="{{ route('cars.index') }}" class="text-slate-600 hover:text-emerald-600 transition-colors font-medium {{ request()->routeIs('cars.*') ? 'text-emerald-600' : '' }}">Pricelist</a>
                    <a href="{{ route('tour-packages.index') }}" class="text-slate-600 hover:text-emerald-600 transition-colors font-medium {{ request()->routeIs('tour-packages.*') ? 'text-emerald-600' : '' }}">Paket Wisata</a>
                    <a href="{{ route('drop-off.index') }}" class="text-slate-600 hover:text-emerald-600 transition-colors font-medium {{ request()->routeIs('drop-off.*') ? 'text-emerald-600' : '' }}">Drop Off Bandara</a>
                    <a href="{{ route('gallery.index') }}" class="text-slate-600 hover:text-emerald-600 transition-colors font-medium {{ request()->routeIs('gallery.*') ? 'text-emerald-600' : '' }}">Galeri</a>
                    <a href="{{ route('contact.index') }}" class="text-slate-600 hover:text-emerald-600 transition-colors font-medium {{ request()->routeIs('contact.*') ? 'text-emerald-600' : '' }}">Kontak</a>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ whatsapp_booking_url('general', 'Booking') }}" target="_blank" rel="noopener" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-lg shadow-emerald-500/25 hover:shadow-emerald-500/40 transition-all duration-300 hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Booking WhatsApp
                </a>

                <button @click="open = !open" class="lg:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div x-show="open" x-transition class="lg:hidden border-t border-slate-200 bg-white">
        <div class="px-4 py-4 space-y-2">
            <a href="{{ route('home') }}" class="block py-2 text-slate-600 font-medium">Home</a>
            <a href="{{ route('home') }}#about" class="block py-2 text-slate-600 font-medium">Tentang</a>
            <a href="{{ route('cars.index') }}" class="block py-2 text-slate-600 font-medium">Pricelist</a>
            <a href="{{ route('tour-packages.index') }}" class="block py-2 text-slate-600 font-medium">Paket Wisata</a>
            <a href="{{ route('drop-off.index') }}" class="block py-2 text-slate-600 font-medium">Drop Off Bandara</a>
            <a href="{{ route('gallery.index') }}" class="block py-2 text-slate-600 font-medium">Galeri</a>
            <a href="{{ route('contact.index') }}" class="block py-2 text-slate-600 font-medium">Kontak</a>
            <a href="{{ whatsapp_booking_url('general', 'Booking') }}" target="_blank" class="flex items-center justify-center gap-2 mt-4 py-3 bg-emerald-600 text-white font-semibold rounded-xl">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Booking WhatsApp
            </a>
        </div>
    </div>
</nav>
