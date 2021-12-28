<?php

namespace App\Http\Livewire\Join;

use App\Enums\PlayerRoleEnum;
use App\Models\{Game, Player};
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

final class EnterNameComponent extends Component
{
    public string $token;

    public ?string $name = null;

    public function render(): View
    {
        return view('livewire.join.enter-name-component');
    }

    public function rules(): array
    {
        $game = Game::where('token', $this->token)->firstOrFail();

        return [
            'name' => [
                'required',
                Rule::unique(Player::class)
                    ->where('game_id', $game->id)
            ]
        ];
    }

    public function updated(string $name): void
    {
        $this->validateOnly($name);
    }

    public function continue(): void
    {
        $this->validate();

        $player = Player::create([
            'name' => $this->name,
            'game_id' => Game::where('token', $this->token)->firstOrFail()->id,
            'role' => PlayerRoleEnum::Normal(),
        ]);

        Auth::login($player);

        $this->emit('PlayerLoggedIn');
    }
}
