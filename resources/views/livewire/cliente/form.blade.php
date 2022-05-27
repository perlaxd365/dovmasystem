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
                <label for="inputEmail4">Tipo de Cliente</label>
                <select wire:model="id_tipo_cliente" class="form-control" name="" id="">
                    <option value="">Seleccionar Tipo de Cliente</option>
                    @foreach ($listaTipoCliente as $tipos)
                        <option value="{{ $tipos['id_tipo_cliente'] }}">{{ $tipos['nombre_tipo'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Tipo de Persona</label>
                <select wire:model="id_tipo_persona" class="form-control" name="" id="">
                    <option value="">Seleccionar Tipo de Persona</option>
                    @foreach ($listaTipoPersona as $tipos)
                        <option value="{{ $tipos['id_tipo_persona'] }}">{{ $tipos['descripcion'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Razon Social</label>
                <input wire:model="razon_social_cli" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Razón Social" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Nombres</label>
                <input wire:model="nombre_cli" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Nombres" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Apellido Paterno</label>
                <input wire:model="ape_pat_cli" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Apellido Paterno" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Apellido Materno</label>
                <input wire:model="ape_mat_cli" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Apellido Materno" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">DNI</label>
                <input wire:model="dni_cli" maxlength="8" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="DNI" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">RUC</label>
                <input wire:model="ruc_cli" maxlength="12" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="RUC" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Email</label>
                <input wire:model="email_cli" type="email" class="form-control" id="inputEmail4" value=""
                    placeholder="Email" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Teléfono</label>
                <input wire:model="telefono_cli" maxlength="15"  type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Teléfono" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Dirección</label>
                <input wire:model="direccion_cli" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Dirección" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Contacto</label>
                <input wire:model="contacto_cli" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Contacto" autocomplete="off">
            </div>
        </div>


    </div>

</div>
