<div class="col-6 col-xxl-4">
    <div class="card cursor-pointer bg-hover-light-primary" wire:click="$emit('ShowPlayerActions', '{{ $player->getRouteKey() }}')">
        <div class="card-body d-flex flex-center flex-column pt-12 p-9">
            <div class="symbol symbol-65px symbol-circle mb-5">
                <span class="symbol-label fs-2x fw-bold text-primary bg-light-primary">{{ $player->name[0] }}</span>
            </div>
            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">
                {{ $player->name }}
                @if ($player->getRouteKey() === Auth::user()->getRouteKey())
                    {{ ' (you)' }}
                @endif
            </a>
        </div>
    </div>
</div>
