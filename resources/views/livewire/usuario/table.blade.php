<div class="card">
    <div class="card-body row">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>

                    @foreach ($usuarios as  $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->nombre_tipo }}</td>
                            <td>{{ $usuario->nombre }} {{ $usuario->apellido }}</td>
                            <td>{{ $usuario->dni }}</td>
                            <td>{{ $usuario->direccion }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td><button class="btn btn-primary" wire:click="edit({{$usuario->id}})">Editar</button></td>
                            <td><button class="btn btn-danger" wire:click="delete({{ $usuario->id }})">Eliminar</button></td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $usuarios->links() }}
    </div>

</div>
<br>
