<script>
    $(document).ready(() => {
        Livewire.on('InvalidToken', () => {
            Swal.fire({
                icon: 'error',
                title: '{{ __('game.game_not_found') }}',
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonText: '{{ __('general.ok') }}',
            });
        });

        Livewire.on('GameAlreadyStarted', () => {
            Swal.fire({
                icon: 'error',
                title: '{{ __('game.already_started') }}',
                text: '{{ __('game.error_already_started') }}',
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonText: '{{ __('general.ok') }}',
            });

        });

        Livewire.on('TokenIsValid', (token) => {
            Swal.fire({
                icon: 'success',
                title: '{{ __('game.game_found') }}',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 1500,
            }).then(() => {
                Livewire.emit('SetToken', token);
            });
        })

        Livewire.on('PlayerLoggedIn', () => {
            Swal.fire({
                icon: 'success',
                title: '{{ __('game.lets_get_started') }}',
                text: '{{ __('general.redirecting') }}...',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 1500,
            }).then(() => {
                window.location = '{{ route('dashboard') }}';
            });
        });
    });
</script>
