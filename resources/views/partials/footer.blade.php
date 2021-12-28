<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container d-flex flex-column flex-md-row flex-stack">
        <div class="text-dark order-2 order-md-1">
            <span class="text-gray-400 fw-bold me-1">{{ __('general.created_by') }}</span>
            <a href="{{ config('theme.author_website') }}" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">{{ config('theme.author_name') }}</a>
        </div>
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
            <li class="menu-item"><a href="{{ config('theme.author_website') }}" target="_blank" class="menu-link px-2">{{ __('general.about') }}</a></li>
            <li class="menu-item"><a href="{{ config('theme.author_contact_page') }}" target="_blank" class="menu-link px-2">{{ __('general.contact') }}</a></li>
        </ul>
    </div>
</div>
