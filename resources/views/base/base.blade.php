<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ !isset($tab_title) ? '' :  ($tab_title . ' | ') }}{{ config('app.name') }}</title>
        <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.">
        <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard">
        <link rel="canonical" href="https://devrepublic.nl/">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700">

        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/global/plugins-custom.bundle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css">
        <script defer src="https://unpkg.com/alpinejs@3.4.1/dist/cdn.min.js"></script>

        @stack('styles')
        @livewireStyles
    </head>
    <body
        class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled"
        {{ !$sidebarService->defaultMinimized() ?: 'data-kt-aside-minimize=on' }}
    >
        @yield('layout')

        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('js/custom/widgets.js') }}"></script>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
