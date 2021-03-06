<div class="col-12 col-xl-2 w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto w-lg">
    @switch ($step)
        @case (0)
            @livewire('join.enter-token-component')
            @break
        @case (1)
            @livewire('join.create-game-component')
            @break
        @case (2)
            @livewire('join.enter-name-component', ['token' => $token])
            @break
    @endswitch
</div>
