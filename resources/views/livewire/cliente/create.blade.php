
<h4>
    Crear Cliente
</h4>
<br>
@include('livewire.cliente.form')
<br>
<div class="" style="padding-left: 20px">
    
    <button wire:click="guardar_usuario" wire:loading.attr="disabled" class="btn btn-primary"
    type="button"> <i class="fa fa-plus-circle"></i> <i wire:target="guardar_usuario"
        wire:loading.class="fa fa-spinner fa-spin" aria-hidden="true"></i> Agregar</button>




</div>
<br>