<?php

namespace App\Http\Livewire;

use App\Models\TipoUsuario;
use App\Models\Usuario as ModelsUsuario;
use Livewire\Component;
use Livewire\WithPagination;
use App\Services\TaskService;
use Illuminate\Support\Facades\DB;

class Usuario extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    //datos
    public $view = "create", $id_tipo, $nombre, $apellido, $dni, $direccion, $email, $telefono;
    //id
    public $id_usuario;
    public $listaTipos = [];

    public function mount()
    {
        $this->show = 5;
        $this->listaTipos = TipoUsuario::all()->toArray();
    }

    public function render()
    {
        return view('livewire.usuario', [
            "usuarios" => $this->getUsuarios()
        ]);
    }

    public function getUsuarios()
    {
        return ModelsUsuario::select('*')
            ->join('tipo_usuarios', 'tipo_usuarios.id_tipo', '=', 'usuarios.tipo_id')
            ->where('estado', '=', 'activo')
            ->orderby('id', 'desc')->paginate($this->show);
    }



    public function guardar_usuario()
    {
        $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'id_tipo' => 'required',
            'dni' => 'required',
        ]);

        ModelsUsuario::create([
            'tipo_id' => $this->id_tipo,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'dni' => $this->dni,
            'direccion' => $this->direccion,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'estado' => 'Activo',
        ]);
        $this->default();
        $this->dispatchBrowserEvent('respuesta', ['res'=>'registró']);
    }


    public function edit($id)
    {
        $usuario = ModelsUsuario::find($id);
        $this->id_usuario  =    $usuario->id;
        $this->id_tipo  =    $usuario->tipo_id;
        $this->nombre   =    $usuario->nombre;
        $this->apellido =    $usuario->apellido;
        $this->dni      =    $usuario->dni;
        $this->direccion =   $usuario->direccion;
        $this->email    =    $usuario->email;
        $this->telefono =    $usuario->telefono;

        $this->view = "edit";
    }

    public function default()
    {
        $this->view = "create";
        $this->id_tipo = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->dni = '';
        $this->direccion = '';
        $this->email = '';
        $this->telefono = '';
    }


    public function actualizar_usuario()
    {

        $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'id_tipo' => 'required',
            'dni' => 'required',
        ]);

        $usuario = ModelsUsuario::find($this->id_usuario);
        $usuario->update([
            'tipo_id'   => $this->id_tipo,
            'nombre'    => $this->nombre,
            'apellido'  => $this->apellido,
            'dni'       => $this->dni,
            'direccion' => $this->direccion,
            'email'     => $this->email,
            'telefono'  => $this->telefono,
            'updated_at'=> now(),

        ]);
        $this->view = "create";
        $this->default();
        $this->dispatchBrowserEvent('respuesta', ['res'=>'actualizó']);
    }
    public function delete($id){

        $usuario = ModelsUsuario::find($id);
        $usuario->update([
            'estado'   => 'Inactivo',
            'deleted_at' => now()

        ]);
        $this->default();
        $this->dispatchBrowserEvent('respuesta', ['res'=>'eliminó']);
        
    }
}
