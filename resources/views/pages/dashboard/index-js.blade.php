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
