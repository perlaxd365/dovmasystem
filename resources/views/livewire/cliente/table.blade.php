
<div class="card">
    <br>
    <!-- Another variation with a button -->

    <div class="input-group mx-auto" style="width: 100px;">
        
        <label for="inputEmail4">Búsqueda</label>
    </div>
        <div class="input-group mx-auto" style="width: 500px;">
        <input wire:model="busqueda" type="text" class="form-control" placeholder="Buscar por cualquier criterio">
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
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Tipo Cliente</th>
                    <th scope="col">Tipo Persona</th>
                    <th scope="col">Razon Social</th>
                    <th scope="col">DNI</th>
                    <th scope="col">RUC</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @if (count($clientes) > 0)
                    @foreach ($clientes as $key=> $cliente)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td NOWRAP>{{ $cliente->nombre }} {{ $cliente->ape_pat_cli }} {{ $cliente->ape_mat_cli }}</td>
                            <td>{{ $cliente->nombre_tipo }}</td>
                            <td NOWRAP>{{ $cliente->descripcion }}</td>
                            <td NOWRAP>{{ $cliente->razon_social_cli }}</td>
                            <td>{{ $cliente->dni_cli }}</td>
                            <td>{{ $cliente->ruc_cli }}</td>
                            <td NOWRAP>{{ $cliente->direccion_cli }}</td>
                            <td NOWRAP>{{ $cliente->telefono_cli }}</td>
                            <td>{{ $cliente->email_cli }}</td>
                            <td NOWRAP>{{ $cliente->contacto_cli }}</td>
                            <td><button class="btn btn-primary " wire:click="edit({{$cliente->id_cliente}})">
                                <i class='fas fa-pencil-alt'></i>Editar</button></td>
                            <td><button class="btn btn-danger" wire:click="delete({{ $cliente->id_cliente }})">
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
        {{ $clientes->links() }}
    </div>

</div>
<br>
