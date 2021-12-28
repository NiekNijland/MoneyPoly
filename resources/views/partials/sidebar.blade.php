@php
    $sidebarElements = $sidebarService->getSidebarElements()
@endphp
<div class="page d-flex flex-row flex-column-fluid">
    <div
        id="kt_aside"
        class="aside aside-extended bg-white"
        data-kt-drawer="true"
        data-kt-drawer-name="aside"
        data-kt-drawer-activate="{default: true, lg: false}"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="auto"
        data-kt-drawer-direction="start"
        data-kt-drawer-toggle="#kt_aside_toggle"
    >
        <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
            @include('partials.sidebar.logo')
            <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
                @include('partials.sidebar.nav')
            </div>
            {{-- @include('partials.sidebar.footer') --}}
        </div>
        <div class="aside-secondary d-flex flex-row-fluid">
            @include('partials.sidebar.workspace')
        </div>
    </div>
    @if($sidebarService->showToggle())
        @include('partials.sidebar.aside_toggle')
    @endif
</div>
