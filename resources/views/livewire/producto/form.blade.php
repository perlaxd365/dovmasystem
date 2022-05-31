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
                <label for="inputEmail4">Código Interno</label>
                <input wire:model="codigo_interno"  type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Razón Social" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Unidad de medida de Stock</label>
                <select wire:model="id_uni_med_stock" class="form-control" name="" id="">
                    <option value="">Seleccionar ...</option>
                    @foreach ($uniMedStock as $unidad)
                        <option value="{{ $unidad['id_uni_med'] }}">{{ $unidad['descripcion'] }} ({{ $unidad['abreviatura'] }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Unidad de medida de Capacidad</label>
                <select wire:model="id_uni_med_capacidad" class="form-control" name="" id="">
                    <option value="">Seleccionar ...</option>
                    @foreach ($uniMedCapacidad as $unidad)
                        <option value="{{ $unidad['id_uni_med'] }}">{{ $unidad['descripcion'] }} ({{ $unidad['abreviatura'] }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Descripción</label>
                <input wire:model="descripcion_pro" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Descripción de Producto" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Capacidad</label>
                <input wire:model="capacidad_pro" type="text" class="form-control" id="inputEmail4" value=""
                    placeholder="Capacidad de Producto" autocomplete="off">
            </div>
        </div>


    </div>

</div>
