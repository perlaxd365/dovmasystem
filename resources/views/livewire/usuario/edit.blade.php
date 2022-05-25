<h4>
    Editar Usuario
</h4>
<br>
@include('livewire.usuario.form')
<br>
<div class="" style="padding-left: 20px">
    <button wire:click="actualizar_usuario" type="submit" class="btn btn-primary">Actualizar</button>
    <button wire:click="default" type="submit" class="btn btn-secondary">Cancelar</button>
</div>
<br>