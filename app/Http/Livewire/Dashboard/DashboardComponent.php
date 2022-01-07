<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Player;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function view;

final class DashboardComponent extends Component
{
    public Player $player;

    public function mount(): void
    {
        $this->player = Auth::user();
    }

    public $listeners = [
        'GameStarted' => '$refresh',
    ];

    public function render(): View
    {
        return view('livewire.dashboard.dashboard-component');
    }
}
