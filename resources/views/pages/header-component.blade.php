    <div
        class="col-6 page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
    >
        @include('partials.header.page_title')
    </div>
    <div class="col-6 d-flex d-lg-none align-items-center ms-n2 me-2">
        <span id="page-title" class="text-dark fw-bolder ms-2 my-0 ls-5" style="font-size: 2.5rem">
            {{ $page_title }}
        </span>
        {{--
        <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
            {!! $themeService->getSvgIcon('icons/duotune/abstract/abs015.svg', 'svg-icon-2x') !!}
        </div>
        <a href="{{ route('dashboard') }}" class="d-flex align-items-center">
            <img alt="Logo" src="{{ asset('media/logos/logo-demo7.svg') }}" class="h-30px">
        </a>
        --}}
    </div>
    @include('partials.header.toolbar')

@push('scripts')
    @include('pages.header-component-js')
@endpush

