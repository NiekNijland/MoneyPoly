@livewire('dashboard.active.money-component')
<button class="btn btn-primary mt-5 w-100">
    <span class="mx-auto">
            Send to bank
    </span>
</button>
<button class="btn btn-warning mt-5 w-100">
    <span class="mx-auto">
            Send to Free Parking
    </span>
</button>
<div
    class="d-flex flex-column scroll-y me-n7 pe-7 mt-8"
    id="players_scroll"
    data-kt-scroll="true"
    data-kt-scroll-activate="{default: false, lg: true}"
    data-kt-scroll-max-height="auto"
    data-kt-scroll-wrappers="#players_scroll"
    data-kt-scroll-offset="300px"
>
    <div class="fw-bolder fs-3 rotate collapsible" data-bs-toggle="collapse" href="#players_scroll_content" role="button" aria-expanded="true" aria-controls="players_scroll_content">
        <span class="me-2 mb-1 rotate-180">
            {!! $themeService->getSvgIcon('icons/duotune/arrows/arr072.svg', 'svg-icon-3') !!}
        </span>
        <h2 class="fs-2 fw-bold my-2">
            {{ __('player.players') }}
            <span class="fs-6 text-gray-400 ms-1">some subtext</span>
        </h2>
    </div>
    <div class="h-3px w-100 bg-primary rounded mb-7"></div>
    <div id="players_scroll_content" class="collapse show" style="">
        <div class="row">
            @foreach($players as $index => $player)
                @include('pages.dashboard.active.player')
            @endforeach
        </div>
    </div>
</div>
