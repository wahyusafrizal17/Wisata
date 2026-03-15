<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SMJ Rent - Rental Mobil & Paket Wisata Premium')</title>
    <meta name="description" content="@yield('description', 'PT. Sejahtera Mitra Jaya - Rental mobil premium, paket wisata, drop off bandara. Layanan transportasi aman, nyaman & terpercaya.')">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'SMJ Rent - Rental Mobil & Paket Wisata')">
    <meta property="og:description" content="@yield('og_description', 'Rental mobil premium dengan layanan terbaik untuk perjalanan Anda')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="font-sans antialiased text-slate-800 bg-white">
    <x-frontend.navbar />

    <main>
        @yield('content')
    </main>

    <x-frontend.footer />

    @stack('scripts')
</body>
</html>
