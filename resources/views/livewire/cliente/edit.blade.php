<h4>
    Editar Cliente
</h4>
<br>
@include('livewire.cliente.form')
<br>
<div class="" style="padding-left: 20px">

    <button wire:click="actualizar_usuario" wire:loading.attr="disabled" class="btn btn-primary" type="button"> <i
            class="fas fa-pencil-alt"></i> <i wire:target="actualizar_usuario" wire:loading.class="fa fa-spinner fa-spin"
            aria-hidden="true"></i> Actualizar</button>

    <button wire:click="default" wire:loading.attr="disabled" class="btn btn-secondary" type="button"> <i
            class="fa fa-window-close"></i> <i wire:target="default" wire:loading.class="fa fa-spinner fa-spin"
            aria-hidden="true"></i> Cancelar</button>
</div>
<br>
