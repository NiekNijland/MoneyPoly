<?php

namespace App\Http\Livewire\Join;

use App\Services\GameService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Livewire\Component;

final class CreateGameComponent extends Component
{
    public ?string $token = null;

    public function mount(): void
    {
        $this->token = App::make(GameService::class)->createGame()->token;
    }

    public function render(): View
    {
        return view('livewire.join.create-game-component');
    }
}
