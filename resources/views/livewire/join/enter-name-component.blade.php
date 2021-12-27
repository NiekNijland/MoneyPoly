<div class="w-100">
    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">
            {{ config('app.name') }}
        </h1>
        <div class="text-gray-400 fw-bold fs-4">
            {{ __('game.enter_your_name_to_start') }}
        </div>
    </div>
    <div class="fv-row mb-10">
        <input
            wire:model.lazy="name"
            class="form-control form-control-solid text-center"
            placeholder="{{ __('player.enter_your_name') }}"
            aria-label="{{ __('player.enter_your_name') }}"
            type="text"
            id="name"
            autocomplete="off"
            autofocus
        />
        @error('name')
            <label class="text-danger text-center w-100">
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
