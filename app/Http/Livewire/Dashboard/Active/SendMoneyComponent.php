<?php

namespace App\Http\Livewire\Dashboard\Active;

use App\Models\Player;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

final class SendMoneyComponent extends Component
{
    public Player|bool $player;

    public int $money;

    public function render(): View
    {
        return view('livewire.dashboard.active.send-money-component');
    }

    public function rules(): array
    {
        return [
            'money' => [
                'number',
                'min:0',
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

        if ($this->player === false) {
            Auth::user()->money -= $this->money;
        } else {
            dd('henk');
        }
    }
}
