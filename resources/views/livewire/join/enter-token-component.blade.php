<div class="w-100">
    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">
            {{ config('app.name') }}
        </h1>
        <div class="text-gray-400 fw-bold fs-4">
            {{ __('game.enter_a_token_or') }}
            <a
                class="text-success cursor-pointer"
                wire:click="$emit('SetStep', 1)"
            >
                {{ __('game.create_a_game') }}
            </a>
        </div>
    </div>
    <div class="fv-row mb-10">
        <input
            wire:model.lazy="token"
            class="form-control form-control-solid text-center fs-1 ls-5"
            placeholder="{{ __('game.token') }}"
            aria-label="{{ __('general.label_enter', ['value' => __('game.token')]) }}"
            type="text"
            id="token"
            autocomplete="off"
            autofocus
            maxlength="6"
            style="text-transform: uppercase"
        />
        @error('token')
            <label class="text-danger text-center w-100 pt-2">
                <span class="error">
                    {{ $message }}
                </span>
            </label>
        @enderror
    </div>
    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <button type="button" wire:click="continue" class="btn btn-lg btn-primary fw-bolder">
            {{ __('general.continue') }}
        </button>
    </div>
</div>
