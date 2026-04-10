<nav x-data="{ open: false }" class="sticky top-0 z-50 w-full bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 lg:h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img
                        src="{{ asset('logo.png') }}"
                        alt="SMJ Rent"
                        class="h-8 w-auto lg:h-9"
                        loading="eager"
                        decoding="async"
                        style="width: 80px;height: 80px;"
                    >
                </a>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden lg:flex lg:gap-8">
                    <a href="{{ route('home') }}" class="text-slate-600 hover:text-brand-600 transition-colors font-medium {{ request()->routeIs('home') ? 'text-brand-600' : '' }}">Home</a>
                    <a href="{{ url('/profil') }}" class="text-slate-600 hover:text-brand-600 transition-colors font-medium">Profil</a>
                    <a href="{{ route('cars.index') }}" class="text-slate-600 hover:text-brand-600 transition-colors font-medium {{ request()->routeIs('cars.*') ? 'text-brand-600' : '' }}">Pricelist</a>
                    <a href="{{ route('tour-packages.index') }}" class="text-slate-600 hover:text-brand-600 transition-colors font-medium {{ request()->routeIs('tour-packages.*') ? 'text-brand-600' : '' }}">Paket Wisata</a>
                    <a href="{{ route('drop-off.index') }}" class="text-slate-600 hover:text-brand-600 transition-colors font-medium {{ request()->routeIs('drop-off.*') ? 'text-brand-600' : '' }}">Drop Off Bandara</a>
                    <a href="{{ route('gallery.index') }}" class="text-slate-600 hover:text-brand-600 transition-colors font-medium {{ request()->routeIs('gallery.*') ? 'text-brand-600' : '' }}">Dokumentasi</a>
                    <a href="{{ route('contact.index') }}" class="text-slate-600 hover:text-brand-600 transition-colors font-medium {{ request()->routeIs('contact.*') ? 'text-brand-600' : '' }}">Kontak</a>
                </div>

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
            <a href="{{ url('/profil') }}" class="block py-2 text-slate-600 font-medium">Profil</a>
            <a href="{{ route('cars.index') }}" class="block py-2 text-slate-600 font-medium">Pricelist</a>
            <a href="{{ route('tour-packages.index') }}" class="block py-2 text-slate-600 font-medium">Paket Wisata</a>
            <a href="{{ route('drop-off.index') }}" class="block py-2 text-slate-600 font-medium">Drop Off Bandara</a>
            <a href="{{ route('gallery.index') }}" class="block py-2 text-slate-600 font-medium">Dokumentasi</a>
            <a href="{{ route('contact.index') }}" class="block py-2 text-slate-600 font-medium">Kontak</a>
        </div>
    </div>
</nav>
