<script>
    Echo.private('game.{{ $token }}').listen('SentToBankEvent', (event) => {
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

        toastr["success"](event.playerName + ' sent $' + event.money + ' to the bank');
    })

    Echo.private('game.{{ $token }}').listen('PlayerRemovedEvent', (event) => {
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

        if (event.playerRouteKey === '{{ Auth::user()->getRouteKey() }}') {
            Swal.fire({
                icon: 'warning',
                title: '{{ __('player.you_have_been_removed')  }}',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000,
            }).then(() => {
                window.location = '{{ route('leave') }}';
            });
        } else {
            toastr["error"](event.playerName + ' has been removed from the game');
        }
    })

    Echo.private('game.{{ $token }}').listen('SentToFreeParkingEvent', (event) => {
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

        toastr["success"](event.playerName + ' sent $' + event.money + ' to free parking');
    })

    Echo.private('game.{{ $token }}').listen('SentToPlayerEvent', (event) => {
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

        toastr["success"](event.playerName + ' sent $' + event.money + ' to ' + event.receivingPlayerName);

        if (event.receivingPlayerName === '{{ Auth::user()->name }}') {
            moneyReceived(event.playerName, event.money);
        }
    })

    Echo.private('game.{{ $token }}').listen('SentFreeParkingEvent', (event) => {
        if (event.playerRouteKey === '{{ Auth::user()->getRouteKey() }}') {
            Swal.fire({
                icon: 'success',
                title: 'You have received $' + event.money + ' from free parking',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000,
            });
        } else {
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
            toastr["success"](event.playerName + ' received $' + event.money + ' from free parking');
        }
    });
</script>
