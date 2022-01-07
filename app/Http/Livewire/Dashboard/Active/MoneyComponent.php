<?php

namespace App\Http\Livewire\Dashboard\Active;

use App\Models\Player;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function view;

final class MoneyComponent extends Component
{
    public int $money;

    public function mount(): void
    {
        $this->money = Auth::user()->money;
    }

    public function render(): View
    {
        return view('livewire.dashboard.active.money-component');
    }
}
