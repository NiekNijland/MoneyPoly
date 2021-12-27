@extends('base.base')

@section('layout')
    <div class="d-flex flex-column flex-root">
        @include('partials.sidebar')
        <div class="wrapper d-flex flex-column flex-row-fluid">
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
                @hasSection('content')
                    <div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
                        @include('partials.header')
                    </div>
                @endif
                @hasSection('unconstrained-content')
                    <div class="d-flex align-items-center justify-content-between mx-15">
                        @include('partials.header')
                    </div>
                @endif
            </div>
            <div class="content d-flex flex-column flex-column-fluid">
                @hasSection('content')
                    <div id="kt_content_container" class="container-xxl">
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

    {{--
    @include('partials.activities')
    @include('partials.explore')
    --}}

    @include('partials.scrolltop')
@endsection
