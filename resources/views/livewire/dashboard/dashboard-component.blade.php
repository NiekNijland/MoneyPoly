<div class="h-100">
    @switch ($player->game->status)
        @case (\App\Enums\GameStatusEnum::Waiting())
        @livewire('dashboard.waiting-component')
        @break
        @case (\App\Enums\GameStatusEnum::Active())
            @if ($sendMoney)
                @livewire('dashboard.active.send-money-component', ['playerRouteKey' => $playerRouteKey])
            @else
                @livewire('dashboard.active.active-component')
            @endif
        @break
        @case (\App\Enums\GameStatusEnum::Closed())
        @include('pages.dashboard.closed')
        @break
    @endswitch
</div>
