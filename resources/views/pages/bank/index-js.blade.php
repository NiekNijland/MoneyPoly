<script>
    $(document).ready(() => {
        Livewire.on('PlayerRemoved', () => {
            Swal.fire({
                icon: 'success',
                title: '{{ __('game.player_removed')  }}',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000,
            });

            Livewire.emit('HidePlayerActions');
        });

        Livewire.on('SentFreeParking', () => {

            Livewire.emit('HidePlayerActions');
        });
    });
</script>
