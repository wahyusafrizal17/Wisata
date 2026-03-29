<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('Masuk') }} — {{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900">
        <div class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-red-600 via-red-700 to-red-900 px-4 py-10 sm:px-6">
            {{-- Dekorasi latar: gelombang & bokeh --}}
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                <div class="absolute -left-32 -top-24 h-96 w-96 rounded-full bg-white/10 blur-3xl"></div>
                <div class="absolute -bottom-20 -right-20 h-80 w-80 rounded-full bg-black/10 blur-3xl"></div>
                <svg class="absolute bottom-0 left-0 w-full opacity-20" viewBox="0 0 1440 320" preserveAspectRatio="none">
                    <path fill="rgba(255,255,255,0.15)" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,261.3C960,256,1056,224,1152,208C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
                <svg class="absolute top-1/4 right-0 h-64 w-64 text-white/5" viewBox="0 0 200 200" fill="currentColor">
                    <path d="M100 0 L200 100 L100 200 L0 100 Z" transform="rotate(15 100 100) scale(1.2)" />
                </svg>
            </div>

            <div class="relative z-10 w-full max-w-4xl">
                <div class="flex flex-col overflow-hidden rounded-3xl bg-white shadow-2xl shadow-black/20 md:min-h-[32rem] md:flex-row">
                    {{-- Panel ilustrasi --}}
                    <div class="relative hidden min-h-[14rem] flex-1 flex-col justify-center overflow-hidden bg-gradient-to-br from-red-600 to-red-800 p-10 md:flex md:min-h-0">
                        <div class="pointer-events-none absolute inset-0 opacity-30" aria-hidden="true">
                            <div class="absolute left-4 top-8 h-32 w-32 rounded-full border-2 border-white/40"></div>
                            <div class="absolute bottom-12 right-6 h-24 w-24 rounded-full bg-white/20"></div>
                        </div>
                        <div class="relative mx-auto w-full max-w-[240px] text-white">
                            <svg viewBox="0 0 320 280" class="h-auto w-full drop-shadow-lg" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <ellipse cx="160" cy="248" rx="120" ry="16" fill="rgba(0,0,0,0.15)"/>
                                <path d="M40 200 L280 200 L260 230 L60 230 Z" fill="rgba(255,255,255,0.2)"/>
                                <path d="M80 200 L120 120 L200 120 L240 200 Z" fill="rgba(255,255,255,0.95)"/>
                                <rect x="130" y="135" width="60" height="45" rx="4" fill="#1f2937" opacity="0.9"/>
                                <rect x="138" y="142" width="18" height="12" rx="1" fill="#34d399"/>
                                <rect x="164" y="142" width="18" height="12" rx="1" fill="#fbbf24"/>
                                <circle cx="160" cy="95" r="28" fill="#fecaca"/>
                                <path d="M100 200 L120 140 L200 140 L220 200 Z" fill="rgba(255,255,255,0.35)"/>
                                <circle cx="255" cy="72" r="22" fill="#fde047" opacity="0.95"/>
                                <path d="M50 175 L90 155 L130 175 L90 185 Z" fill="rgba(255,255,255,0.25)"/>
                                <path d="M200 175 L240 158 L275 175 L240 188 Z" fill="rgba(255,255,255,0.2)"/>
                            </svg>
                        </div>
                        <p class="relative mt-6 text-center text-sm font-medium leading-relaxed text-white/90">
                            {{ __('Kelola perjalanan & destinasi dengan mudah.') }}
                        </p>
                    </div>

                    {{-- Form --}}
                    <div class="flex flex-1 flex-col justify-center bg-white px-8 py-10 sm:px-10">
                        {{ $slot }}
                    </div>
                </div>

                <p class="mt-6 text-center text-xs text-white/80">
                    © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. {{ __('Hak cipta dilindungi.') }}
                </p>
            </div>
        </div>
    </body>
</html>
