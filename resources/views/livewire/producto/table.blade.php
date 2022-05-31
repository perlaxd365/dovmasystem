
<div class="card">
    <br>
    <!-- Another variation with a button -->

    <div class="input-group mx-auto" style="width: 100px;">
        
        <label for="inputEmail4">Búsqueda</label>
    </div>
        <div class="input-group mx-auto" style="width: 500px;">
        <input wire:model="busqueda" type="text" class="form-control" placeholder="Buscar por todos los criterios">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="button"><i wire:target="busqueda" wire:loading.class="fa fa-spinner fa-spin"
            aria-hidden="true"></i>
            <i class="fa fa-search" wire:loading.attr="disabled" ></i>
          </button>
        </div>
   </div>
    <br>
    <div class="card-body row">
        <table class="table  table-striped table-responsive table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Descripción Producto</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Unidad de Medida (Stock)</th>
                    <th scope="col">Unidad de Medida (Capacidad)</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @if (count($productos) > 0)
                    @foreach ($productos as $key=> $producto)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $producto->desc_pro }}</td>
                            <td>{{ $producto->capacidad_pro }}</td>
                            <td>{{ $producto->unidad_stock }}</td>
                            <td>{{ $producto->unidad_capacidad }}</td>
                            
                            <td><button class="btn btn-primary " wire:click="edit({{$producto->id_producto}})">
                                <i class='fas fa-pencil-alt'></i>Editar</button></td>
                            <td><button class="btn btn-danger" wire:click="delete({{ $producto->id_producto }})">
                                <i class='fas fa-trash-alt'></i>Eliminar</button></td>
                        </tr>
                    @endforeach
                    @else
                        <tr style="cursor:pointer;">
                            <th colspan="100%" style="background-color: bisque" scope="row">Sin Resultados</th>
                        </tr>
                    @endif
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $productos->links() }}
    </div>

</div>
<br>
