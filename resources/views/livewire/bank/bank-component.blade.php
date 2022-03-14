<div class="h-100">
    @if ($selectedPlayer !== null)
        @livewire('bank.player-actions-component', [
            'player' => $selectedPlayer,
            'game' => $game,
        ])
    @else
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
                <span class="fs-6 text-gray-400 ms-1">Select a player to show actions</span>
                </h2>
                </div>
                <div class="h-3px w-100 bg-primary rounded mb-7"></div>
                <div id="players_scroll_content" class="collapse show" style="">
                <div class="row">
                @foreach($players as $index => $player)
                    @include('pages.bank.player')
                @endforeach
                </div>
                </div>
                </div>
    @endif
</div>
