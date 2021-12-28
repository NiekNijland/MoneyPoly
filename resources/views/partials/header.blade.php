<div
    class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
    data-kt-swapper="true"
    data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}"
>
    @include('partials.header.page_title')
</div>
<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
    <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
        {!! $themeService->getSvgIcon('icons/duotune/abstract/abs015.svg', 'svg-icon-2x') !!}
    </div>
    <a href="{{ route('dashboard') }}" class="d-flex align-items-center">
        <img alt="Logo" src="{{ asset('media/logos/logo-demo7.svg') }}" class="h-30px">
    </a>
</div>
@include('partials.header.toolbar')
