<?php

namespace App\Http\Livewire\Bank;

use App\Models\{Game, Player};
use Hashids\Hashids;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

final class BankComponent extends Component
{
    public Game $game;

    public Collection $players;

    public ?Player $selectedPlayer = null;

    public $listeners = [
        'ShowPlayerActions' => 'showPlayerActions',
        'HidePlayerActions' => 'hidePlayerActions',
    ];

    public function render(): View
    {
        return view('livewire.bank.bank-component');
    }

    public function showPlayerActions(string $playerRouteKey): void
    {
        $id = (new Hashids())->decodeHex($playerRouteKey);

        $this->selectedPlayer = $this->players
            ->where('_id', $id)
            ->first();
    }

    public function hidePlayerActions(): void
    {
        $this->selectedPlayer = null;
    }
}
