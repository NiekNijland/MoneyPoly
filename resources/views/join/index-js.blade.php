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
    });
</script>
