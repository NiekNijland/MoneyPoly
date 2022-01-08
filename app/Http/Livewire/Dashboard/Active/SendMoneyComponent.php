<?php

namespace App\Http\Livewire\Dashboard\Active;

use App\Events\{
    SentToBankEvent,
    SentToFreeParkingEvent,
    SentToPlayerEvent,
};
use App\Models\Player;
use Hashids\Hashids;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

final class SendMoneyComponent extends Component
{
    public null|Player|bool $player = null;

    public string $receivingName = '';
    public string|int $money = '';

    /**
     * @param string|bool|null $playerRouteKey
     * @return void
     */
    public function mount(string|bool|null $playerRouteKey): void
    {
        if ($playerRouteKey !== true && $playerRouteKey !== null) {
            $id = (new Hashids())->decodeHex($playerRouteKey);
            $this->player = Player::where([
                '_id' => $id,
                'game_id' => Player::with('game')->find(Auth::id())->game->id,
            ])->firstOrFail();
            $this->receivingName = $this->player->name;
        } else  {
            $this->player = $playerRouteKey;
            if ($playerRouteKey === null) {
                $this->receivingName = __('game.the_bank');
            } else {
                $this->receivingName = __('game.free_parking');
            }
        }
    }

    public function render(): View
    {
        return view('livewire.dashboard.active.send-money-component');
    }

    public function rules(): array
    {
        return [
            'money' => [
                'required',
                'numeric',
                'min:1',
                function ($attribute, $value, $fail) {
                    if ($value > Auth::user()->money) {
                        $fail('This amount exceeds your balance.');
                    }
                }
            ]
        ];
    }

    public function updated(string $name): void
    {
        $this->validateOnly($name);
    }

    public function send(): void
    {
        $this->validate();

        $currentPlayer = Player::with('game')->find(Auth::id());
        if ($this->player === true) {
            /* transfer to free parking */
            $currentPlayer->money -= $this->money;
            $currentPlayer->game->free_parking_money += $this->money;
            $currentPlayer->game->save();
            SentToFreeParkingEvent::dispatch(
                $currentPlayer->game->token,
                $currentPlayer->name,
                $this->money,
            );
        } else if ($this->player === null) {
            /* transfer to bank */
            $currentPlayer->money -= $this->money;
            SentToBankEvent::dispatch(
                $currentPlayer->game->token,
                $currentPlayer->name,
                $this->money,
            );
        } else {
            /* transfer to other player */
            $currentPlayer->money -= $this->money;
            $this->player->money += $this->money;
            $this->player->save();
            SentToPlayerEvent::dispatch(
                $currentPlayer->game->token,
                $currentPlayer->name,
                $this->player->name,
                $this->money,
            );
        }

        $currentPlayer->save();
        $this->emit('MoneySent');
    }
}
