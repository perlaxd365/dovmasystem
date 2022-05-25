<div class="card">
    <h5 class="card-header bg-light">Datos de Cliente</h5>
    <div class="card-body">

        @if (count($errors) > 0)
            <div class="alert border-danger">
                <p>Se encontraron los siguientes errores:</p>
                <ul>
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputEmail4">Tipo de Usuario</label>
                <select wire:model="id_tipo" class="form-control" name="" id="">
                    <option value="">Seleccionar Tipo de usuario</option>
                    @foreach ($listaTipos as $tipos)
                        <option value="{{ $tipos['id_tipo'] }}">{{ $tipos['nombre_tipo'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Nombres</label>
                <input wire:model="nombre" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Nombres">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Apellidos</label>
                <input wire:model="apellido" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Apellidos">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">DNI</label>
                <input wire:model="dni" maxlength="8" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="DNI">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Dirección</label>
                <input wire:model="direccion" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Dirección">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Teléfono</label>
                <input wire:model="telefono" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Teléfono">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Email</label>
                <input wire:model="email" type="email" class="form-control" id="inputEmail4" value=""
                    placeholder="Email">
            </div>
        </div>


    </div>

</div>
