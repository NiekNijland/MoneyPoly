<div class="w-100">
    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">
            {{ config('app.name') }}
        </h1>
        <div class="text-gray-400 fw-bold fs-4">
            {{ __('game.share_this_token') }}
        </div>
    </div>
    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">
            {{ $token }}
        </h1>
    </div>
    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <a wire:click="$emit('SetToken', '{{ $token }}')" class="btn btn-lg btn-primary fw-bolder">
            {{ __('general.continue') }}
        </a>
    </div>
</div>
