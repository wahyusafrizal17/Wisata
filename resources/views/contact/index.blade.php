@extends('layouts.frontend')

@section('title', 'Kontak - SMJ Rent')
@section('description', 'Hubungi SMJ Rent untuk booking rental mobil dan paket wisata. WhatsApp, email, dan alamat kami.')

@section('content')
    <section class="py-16 lg:py-24 bg-slate-50">
        @php($contact = array_merge([
            'whatsapp' => config('smj.whatsapp'),
            'email' => config('smj.email'),
            'address' => config('smj.address'),
            'instagram' => config('smj.instagram'),
            'facebook' => config('smj.facebook'),
            'linktree' => config('smj.linktree'),
            'maps_embed' => config('smj.maps_embed'),
        ], site_setting('contact', [])))

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Kontak</span>
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 mt-2">Hubungi Kami</h1>
                <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Siap melayani kebutuhan transportasi Anda. Jangan ragu untuk menghubungi kami.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="flex gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-brand-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">WhatsApp</h3>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact['whatsapp'] ?? '') }}" target="_blank" class="text-brand-600 font-medium hover:underline">{{ $contact['whatsapp'] ?? '' }}</a>
                        </div>
                    </div>
                    <div class="flex gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Email</h3>
                            <a href="mailto:{{ $contact['email'] ?? '' }}" class="text-brand-600 font-medium hover:underline">{{ $contact['email'] ?? '' }}</a>
                        </div>
                    </div>
                    <div class="flex gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-brand-600" fill="currentColor" viewBox="0 0 24 24"><path d="M22.676 0H1.326C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24h11.494v-9.294H9.691V11.09h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24h-1.918c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.616h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.676 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Facebook</h3>
                            @if(!empty($contact['facebook']))
                                <a href="{{ $contact['facebook'] }}" target="_blank" rel="noopener" class="text-brand-600 font-medium hover:underline">{{ $contact['facebook'] }}</a>
                            @else
                                <p class="text-slate-500">-</p>
                            @endif
                        </div>
                    </div>
                    <div class="flex gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-brand-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 7.2a4.8 4.8 0 100 9.6 4.8 4.8 0 000-9.6zm0 7.92a3.12 3.12 0 110-6.24 3.12 3.12 0 010 6.24zM17.76 6.96a1.12 1.12 0 11-2.24 0 1.12 1.12 0 012.24 0z"/><path d="M12 2.88c2.49 0 2.784.009 3.768.054.91.042 1.404.195 1.732.324.435.169.747.372 1.074.699.327.327.53.639.699 1.074.129.328.282.822.324 1.732.045.984.054 1.278.054 3.768s-.009 2.784-.054 3.768c-.042.91-.195 1.404-.324 1.732a2.9 2.9 0 01-.699 1.074 2.9 2.9 0 01-1.074.699c-.328.129-.822.282-1.732.324-.984.045-1.278.054-3.768.054s-2.784-.009-3.768-.054c-.91-.042-1.404-.195-1.732-.324a2.9 2.9 0 01-1.074-.699 2.9 2.9 0 01-.699-1.074c-.129-.328-.282-.822-.324-1.732C2.889 14.784 2.88 14.49 2.88 12s.009-2.784.054-3.768c.042-.91.195-1.404.324-1.732.169-.435.372-.747.699-1.074.327-.327.639-.53 1.074-.699.328-.129.822-.282 1.732-.324C9.216 2.889 9.51 2.88 12 2.88zm0-1.68c-2.532 0-2.85.011-3.846.057-1.02.047-1.717.208-2.326.445a4.58 4.58 0 00-1.656 1.078A4.58 4.58 0 002.094 4.436c-.237.609-.398 1.306-.445 2.326C1.611 7.758 1.6 8.076 1.6 10.608v2.784c0 2.532.011 2.85.057 3.846.047 1.02.208 1.717.445 2.326.25.648.59 1.198 1.078 1.656.458.488 1.008.828 1.656 1.078.609.237 1.306.398 2.326.445.996.046 1.314.057 3.846.057s2.85-.011 3.846-.057c1.02-.047 1.717-.208 2.326-.445a4.58 4.58 0 001.656-1.078 4.58 4.58 0 001.078-1.656c.237-.609.398-1.306.445-2.326.046-.996.057-1.314.057-3.846v-2.784c0-2.532-.011-2.85-.057-3.846-.047-1.02-.208-1.717-.445-2.326a4.58 4.58 0 00-1.078-1.656A4.58 4.58 0 0019.52 1.702c-.609-.237-1.306-.398-2.326-.445C14.85 1.211 14.532 1.2 12 1.2z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Instagram</h3>
                            @if(!empty($contact['instagram']))
                                <a href="{{ $contact['instagram'] }}" target="_blank" rel="noopener" class="text-brand-600 font-medium hover:underline">{{ $contact['instagram'] }}</a>
                            @else
                                <p class="text-slate-500">-</p>
                            @endif
                        </div>
                    </div>
                    <div class="flex gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-brand-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1.5c-5.8 0-10.5 4.7-10.5 10.5S6.2 22.5 12 22.5 22.5 17.8 22.5 12 17.8 1.5 12 1.5zm0 19.2c-4.8 0-8.7-3.9-8.7-8.7S7.2 3.3 12 3.3s8.7 3.9 8.7 8.7-3.9 8.7-8.7 8.7z"/><path d="M10.2 7.8h3.6c1.5 0 2.7 1.2 2.7 2.7 0 1.5-1.2 2.7-2.7 2.7h-1.8v3.9c0 .5-.4.9-.9.9s-.9-.4-.9-.9V8.7c0-.5.4-.9.9-.9zm3.6 4.5c.5 0 .9-.4.9-.9s-.4-.9-.9-.9H12v1.8h1.8z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Linktree</h3>
                            @if(!empty($contact['linktree']))
                                <a href="{{ $contact['linktree'] }}" target="_blank" rel="noopener" class="text-brand-600 font-medium hover:underline">{{ $contact['linktree'] }}</a>
                            @else
                                <p class="text-slate-500">-</p>
                            @endif
                        </div>
                    </div>
                    <div class="flex gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Alamat</h3>
                            <p class="text-slate-600">{{ $contact['address'] ?? '' }}</p>
                        </div>
                    </div>

                    <a href="{{ whatsapp_booking_url('general', 'Booking') }}" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold rounded-xl hover:from-brand-700 hover:to-brand-600 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Booking via WhatsApp
                    </a>
                </div>

                @if(!empty($contact['maps_embed']))
                <div class="rounded-2xl overflow-hidden shadow-lg h-96 lg:h-full min-h-[400px]">
                    {!! $contact['maps_embed'] !!}
                </div>
                @else
                <div class="rounded-2xl overflow-hidden shadow-lg bg-slate-200 h-96 lg:h-full min-h-[400px] flex items-center justify-center">
                    <p class="text-slate-500">Tambahkan Google Maps embed di config/smj.php</p>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
