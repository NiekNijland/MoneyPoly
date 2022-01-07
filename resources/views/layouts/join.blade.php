@extends('base.base')

@section('layout')
    <div class="d-flex flex-column flex-root">
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ asset('media/illustrations/auth/illustration-' . random_int(1, 7) . '.png') }})"
        >
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a class="mb-12">
                    {{-- <img alt="Logo" src="{{ asset('media/logos/logo.png') }}" class="h-80px"/> --}}
                </a>
                @yield('content')
            </div>
            <div class="d-flex flex-center flex-column-auto p-10">
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="{{ config('theme.author_website') }}" class="text-muted text-hover-primary px-2">{{ __('general.about') }}</a>
                    <a href="{{ config('theme.author_contact_page') }}" class="text-muted text-hover-primary px-2">{{ __('general.contact') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
