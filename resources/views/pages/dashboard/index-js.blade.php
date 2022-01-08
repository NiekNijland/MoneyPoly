<script>
    $(document).ready(() => {
        Livewire.on('MoneySent', () => {
            Swal.fire({
                icon: 'success',
                title: '{{ __('player.money_sent')  }}',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000,
            });
        });

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
    });

    const moneyReceived = (fromName, amount) => {
        Livewire.emit('MoneyReceived');
        Swal.fire({
            icon: 'success',
            title: '{{ __('player.money_received')  }}',
            text: 'Recieved $' + amount + ' from ' + fromName,
            showCancelButton: false,
            showConfirmButton: false,
            timer: 2000,
        });
    }
</script>
