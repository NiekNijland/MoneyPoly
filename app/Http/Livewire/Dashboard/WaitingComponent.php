<?php

namespace App\Http\Livewire\Dashboard;

use App\Enums\PlayerRoleEnum;
use App\Services\GameService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\{Collection, Facades\App, Facades\Auth};
use Livewire\Component;

final class WaitingComponent extends Component
{
    public Collection $players;

    public bool $isAdmin;

    public $listeners = [
        'PlayerJoined' => 'loadData',
        'PlayerLeft' => 'loadData',
    ];

    public function mount(): void
    {
        $this->loadData();
    }

    public function loadData(): void
    {
        $this->players = Auth::user()
            ->game
            ->players()
            ->select(['_id', 'name'])
            ->get();

        $this->isAdmin = (Auth::user()->role !== PlayerRoleEnum::Normal());
    }

    public function render(): View
    {
        return view('livewire.dashboard.waiting-component');
    }

    public function start(): void
    {
        (App::make(GameService::class))
            ->startGame(Auth::user()->game, Auth::user());
    }
}
