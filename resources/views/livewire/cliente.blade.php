<div>

    @include('livewire.cliente.' . $view)

    @include('livewire.cliente.table')

    <script type="text/javascript">
        window.addEventListener('respuesta', event => {
            let res = event.detail.res;
            Swal.fire({
                type: 'success',
                title: 'Se '+res+' correctamente',
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>
</div>
