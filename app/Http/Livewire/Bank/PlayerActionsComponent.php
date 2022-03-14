<?php

namespace App\Http\Livewire\Bank;

use App\Events\PlayerRemovedEvent;
use App\Events\ReceivedFreeParkingEvent;
use App\Models\{Game, Player};
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

final class PlayerActionsComponent extends Component
{
    public Game $game;

    public Player $player;

    public function render(): View
    {
        return view('livewire.bank.player-actions-component');
    }

    public function giveFreeParking(): void
    {
        $money = $this->game->free_parking_money;
        $this->player->money += $money;
        $this->game->free_parking_money = 0;

        $this->game->update();
        $this->player->update();

        ReceivedFreeParkingEvent::dispatch(
            $this->game->token,
            $this->player->getRouteKey(),
            $this->player->name,
            $money,
        );

        $this->emit('HidePlayerActions');
    }

    public function removePlayer(): void
    {
        PlayerRemovedEvent::dispatch(
            $this->game->token,
            $this->player->getRouteKey(),
            $this->player->name,
        );

        $this->player->delete();

        $this->emit('PlayerRemoved');
    }
}
