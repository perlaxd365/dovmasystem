<h4>
    Crear Producto
</h4>
<br>
@include('livewire.producto.form')
<br>
<div class="" style="padding-left: 20px">
    
    <button wire:click="create" wire:loading.attr="disabled" class="btn btn-primary"
    type="button"> <i class="fa fa-plus-circle"></i> <i wire:target="create"
        wire:loading.class="fa fa-spinner fa-spin" aria-hidden="true"></i> Agregar</button>




</div>
<br>