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

        if (Game::where('status', GameStatus::Active())->exists()) {
            $this->emit('SetToken', $this->token);
        } else {
            $this->emit('InvalidToken');
        }
    }
}
