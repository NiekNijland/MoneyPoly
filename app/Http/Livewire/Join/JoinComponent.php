<?php

namespace App\Http\Livewire\Join;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class JoinComponent extends Component
{
    public int $step = 0;

    public ?string $token = null;

    public $listeners = [
        'SetStep' => 'setStep',
        'SetToken' => 'setToken',
    ];

    public function render(): View
    {
        return view('livewire.join.join-component');
    }

    public function setStep(int $step): void
    {
        $this->step = $step;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
        $this->setStep(2);
    }
}
