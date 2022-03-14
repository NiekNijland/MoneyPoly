<div class="h-100 position-relative">
    <div class="d-flex justify-content-center">
    <h1 class="fw-bolder fs-2qx text-gray-800 mb-3 mx-auto pt-20">
        {{ __('game.send_to') . ' ' .$receivingName }}
    </h1>
    </div>
    <div class="text-center">
        <input
            wire:model="money"
            aria-label="{{ __('player.money') }}"
            placeholder="200"
            type="number"
            autocomplete="off"
            autofocus
            class="text-center form form-control form-control-xl text-dark mb-3 ls-5 font-weight-bolder"
            style="font-size: 5rem"
        />
        @error('money')
        <label class="text-danger text-center w-100 pt-2">
                <span class="error">
                    {{ $message }}
                </span>
        </label>
        @enderror
    </div>
    <div class="position-absolute bottom-0 w-100">
        <button class="btn btn-primary mt-5 w-100" wire:click="send">
                                                                        <span class="mx-auto">
                                                                        {{ __('general.send') }}
                                                                        </span>
                                                                        </button>
        <button class="btn btn-warning mt-5 w-100" wire:click="$emit('HideSendMoney')">
            <span class="mx-auto">
                {{ __('general.cancel') }}
            </span>
        </button>
    </div>
</div>
