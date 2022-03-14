<div class="h-100 position-relative">
    <button
        class="btn btn-primary mt-5 w-100"
        wire:click="$emit('ShowSendMoney', null)"
        style="height: 20vh"
    >
        <span class="mx-auto">
                Send money
        </span>
    </button>
    <button
        class="btn btn-warning mt-5 w-100"
        wire:click="giveFreeParking"
        style="height: 20vh"
    >
        <span class="mx-auto">
               Send free parking
        </span>
    </button>
    <button
        class="btn btn-danger mt-5 w-100"
        wire:click="removePlayer"
        style="height: 20vh"
    >
        <span class="mx-auto">
               Remove from game
        </span>
    </button>
    <div class="position-absolute bottom-0 w-100">
        <button class="btn btn-warning mt-5 w-100" wire:click="$emit('HidePlayerActions')">
            <span class="mx-auto">
                {{ __('general.cancel') }}
            </span>
        </button>
    </div>
</div>
