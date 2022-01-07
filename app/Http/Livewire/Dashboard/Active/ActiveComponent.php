<?php

namespace App\Http\Livewire\Dashboard\Active;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

final class ActiveComponent extends Component
{
    public Collection $players;

    public function mount(): void
    {
        $this->players = Auth::user()
            ->game
            ->players()
            ->where('_id', '!=',Auth::user()->id)
            ->get();
    }

    public function render(): View
    {
        return view('livewire.dashboard.active.active-component');
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function updated(string $name): void
    {
        $this->validateOnly($name);
    }
}
