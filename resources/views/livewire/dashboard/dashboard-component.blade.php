<div>
    @switch ($player->game->status)
        @case (\App\Enums\GameStatus::Waiting())
        @livewire('dashboard.waiting-component')
        @break
        @case (\App\Enums\GameStatus::Active())
        @livewire('dashboard.active.active-component')
        @break
        @case (\App\Enums\GameStatus::Closed())
        @include('pages.dashboard.closed')
        @break
    @endswitch
</div>
