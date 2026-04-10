<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') - SMJ Rent</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-100 text-slate-800">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-slate-900 text-white fixed h-full">
            <div class="p-6">
                <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold">SMJ <span class="text-brand-400">Rent</span></a>
                <p class="text-slate-400 text-sm mt-1">Admin Panel</p>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    Dashboard
                </a>

                <div class="px-6 pt-6 pb-2 text-xs font-semibold tracking-wider text-slate-500 uppercase">Menu Website</div>
                <a href="{{ route('admin.settings.edit', 'home') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.settings.*') && request()->route('page') === 'home' ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9.75 12 3l9 6.75V21a.75.75 0 0 1-.75.75H3.75A.75.75 0 0 1 3 21V9.75Z"/></svg>
                    Home
                </a>
                <a href="{{ route('admin.site-profile.edit') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.site-profile.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7Zm0-2a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z"/></svg>
                    Profil
                </a>
                <a href="{{ route('admin.settings.edit', 'pricelist') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.settings.*') && request()->route('page') === 'pricelist' ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm10 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM3 6h2l2.4 9.6a2 2 0 0 0 2 1.4h7.2a2 2 0 0 0 2-1.4L22 8H6"/></svg>
                    Pricelist
                </a>
                <a href="{{ route('admin.settings.edit', 'tour-packages') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.settings.*') && request()->route('page') === 'tour-packages' ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10.5a8.25 8.25 0 1 1-16.5 0 8.25 8.25 0 0 1 16.5 0Z"/></svg>
                    Paket Wisata
                </a>
                <a href="{{ route('admin.settings.edit', 'drop-off') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.settings.*') && request()->route('page') === 'drop-off' ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2Zm0 0v-8"/></svg>
                    Drop Off Bandara
                </a>
                <a href="{{ route('admin.site-documentation.edit') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.site-documentation.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5h16M4 9h16M4 13h16M4 17h10"/></svg>
                    Dokumentasi
                </a>
                <a href="{{ route('admin.settings.edit', 'contact') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.settings.*') && request()->route('page') === 'contact' ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 8V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v1m18 0-9 6-9-6m18 0v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8"/></svg>
                    Kontak
                </a>

                <div class="px-6 pt-6 pb-2 text-xs font-semibold tracking-wider text-slate-500 uppercase">Data</div>
                <a href="{{ route('admin.cars.index') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.cars.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm10 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM3 6h2l2.4 9.6a2 2 0 0 0 2 1.4h7.2a2 2 0 0 0 2-1.4L22 8H6"/></svg>
                    Mobil (Pricelist)
                </a>
                <a href="{{ route('admin.tour-packages.index') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.tour-packages.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 0 1 2 2v1a2 2 0 0 0 2 2 2 2 0 0 1 2 2v2.945M8 3.935V5.5A2.5 2.5 0 0 0 10.5 8h.5a2 2 0 0 1 2 2 2 2 0 1 0 4 0v.5a2.5 2.5 0 0 0 5 0V4a2 2 0 0 1 2-2h2.064M15 20.488V18a2 2 0 0 1 2-2h3.064M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    Paket Wisata (Data)
                </a>
                <a href="{{ route('admin.galleries.index') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.galleries.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 0 1 2.828 0L16 16m-2-2l1.586-1.586a2 2 0 0 1 2.828 0L20 14m-6-6h.01M6 20h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z"/></svg>
                    Foto (Dokumentasi)
                </a>
                <a href="{{ route('admin.drop-off-items.index') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.drop-off-items.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M3 12h18M3 18h18"/></svg>
                    Drop Off (List)
                </a>
                <a href="{{ route('admin.banners.index') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.banners.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 0 1 2.828 0L16 16m-2-2l1.586-1.586a2 2 0 0 1 2.828 0L20 14"/></svg>
                    Banner
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('admin.testimonials.*') ? 'bg-brand-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 0 1-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    Testimoni
                </a>

                <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-6 py-3 text-slate-400 hover:bg-slate-800 hover:text-white mt-4 border-t border-slate-700 pt-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Lihat Website
                </a>
            </nav>
        </aside>
        <main class="flex-1 ml-64">
            <header class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">@yield('header', 'Dashboard')</h1>
                <div class="flex items-center gap-4">
                    <span class="text-slate-500">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-slate-500 hover:text-red-600 text-sm">Logout</button>
                    </form>
                </div>
            </header>
            <div class="p-8">
                @if(session('success'))
                <div class="mb-6 p-4 bg-brand-100 text-brand-800 rounded-xl">{{ session('success') }}</div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
