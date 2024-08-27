@props([
    'darkMode' => false,
    'docSearch' => true,
])

        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta
            http-equiv="Content-Security-Policy"
            content="upgrade-insecure-requests"
    />

    <meta
            name="application-name"
            content="{{ config('app.name') }}"
    />
    <meta
            name="csrf-token"
            content="{{ csrf_token() }}"
    />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
    />

    {{--    <x-seo::meta />--}}



    <!-- Fonts -->
    {{--    @googlefonts--}}

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    @vite('resources/css/app.css')

    <!-- Scripts -->
    @livewireScripts
    @vite('resources/js/app.js')
    @stack('scripts')
</head>

<body
        class="relative min-h-screen overflow-x-clip bg-cream font-vietnam text-midnight antialiased selection:bg-stone-500/10"
>
<div
        id="docsearch"
        class="hidden"
></div>

{{ $slot }}
</body>
</html>
