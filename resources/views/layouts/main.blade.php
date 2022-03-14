@extends('base.base')

@section('layout')
    <div class="d-flex flex-column flex-root">
        @include('partials.sidebar')
        <div class="wrapper d-flex flex-column flex-row-fluid">
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
                @hasSection('content')
                    <div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
                @endif
                @hasSection('unconstrained-content')
                    <div class="d-flex align-items-center justify-content-between mx-15">
                @endif
                    @include('pages.header-component')
                </div>
            </div>
            <div class="content d-flex flex-column flex-column-fluid">
                @hasSection('content')
                    <div id="kt_content_container" class="container-xxl h-100">
                        @yield('content')
                    </div>
                @endif
                @hasSection('unconstrained-content')
                    <div class="mx-15">
                        @yield('unconstrained-content')
                    </div>
                @endif
            </div>
            @include('partials.footer')
        </div>
    </div>
    @include('partials.scrolltop')
@endsection

@push('scripts')
    @include('layouts.main-js')
@endpush
