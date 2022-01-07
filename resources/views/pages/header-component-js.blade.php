<script>
    $(document).ready(() => {
        Echo.private('game.{{ $token }}').listen('PlayerJoinedEvent', (event) => {
            $('#player-count').text(event.gamePlayerCount);

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "1000",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            Livewire.emit('PlayerJoined');
            toastr["success"](event.playerName + ' {{ __('game.joined_the_game') }}')
        })

        Echo.private('game.{{ $token }}').listen('PlayerLeftEvent', (event) => {
            $('#player-count').text(event.gamePlayerCount);

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "1000",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            Livewire.emit('PlayerLeft');
            toastr["error"](event.playerName + ' {{ __('game.left_the_game') }}')
        })

        Echo.private('game.{{ $token }}').listen('GameStartedEvent', (event) => {
            Swal.fire({
                icon: 'success',
                title: event.playerName + ' {{ __('player.started_the_game') }}',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000,
            });

            Livewire.emit('GameStarted');
        })
    })
</script>
