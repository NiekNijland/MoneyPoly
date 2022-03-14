<?php

namespace App\Http\Livewire\Join;

use App\Enums\GameStatus;
use App\Models\Game;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class EnterTokenComponent extends Component
{
    public string $token = '';

    public function render(): View
    {
        return view('livewire.join.enter-token-component');
    }

    public function rules(): array
    {
        return [
            'token' => ['required']
        ];
    }

    public function updated(string $name): void
    {
        $this->validateOnly($name);
    }

    public function continue(): void
    {
        $this->validate();

        $gameStatus = Game::where('token', $this->token)
            ->select(['status'])
            ->first()->status ?? null;

        if ($gameStatus === null) {
            $this->emit('InvalidToken');
        } else if ($gameStatus === GameStatus::Active()) {
            $this->emit('GameAlreadyStarted');
        } else if ($gameStatus === GameStatus::Waiting()) {
            $this->emit('TokenIsValid', $this->token);
        }
    }
}
