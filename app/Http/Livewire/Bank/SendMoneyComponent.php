<?php

namespace App\Http\Livewire\Bank;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class SendMoneyComponent extends Component
{
    public array $details = [];

    public array $messages = [];

    public function mount(): void
    {
        $this->messages = [

        ];
    }

    public function render(): View
    {
        return view('livewire.bank.send-money-component');
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
