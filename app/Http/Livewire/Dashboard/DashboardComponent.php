<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Player;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function view;

final class DashboardComponent extends Component
{
    public bool $sendMoney;
    public bool|string|null $playerRouteKey;

    public Player $player;

    public $listeners = [
        'ShowSendMoney' => 'showSendMoney',
        'HideSendMoney' => 'hideSendMoney',
        'MoneySent' => 'hideSendMoney',
        'GameStarted' => '$refresh',
    ];

    public function mount(): void
    {
        $this->player = Auth::user();
    }

    public function render(): View
    {
        return view('livewire.dashboard.dashboard-component');
    }

    public function showSendMoney(bool|string|null $playerRouteKey): void
    {
        $this->sendMoney = true;
        $this->playerRouteKey = $playerRouteKey;
    }

    public function hideSendMoney(): void
    {
        $this->sendMoney = false;
    }
}
