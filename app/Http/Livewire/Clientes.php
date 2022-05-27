<?php

namespace App\Http\Livewire;

use App\Models\TipoCliente;
use App\Models\Cliente as ModelCliente;
use App\Models\TipoPersona;
use Livewire\Component;
use Livewire\WithPagination;
use App\Services\TaskService;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Clientes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    //datos//key
  
    public
            $view = "create",
            $id_tipo_cliente,
            $id_tipo_persona,
            $razon_social_cli,
            $nombre_cli,
            $ape_pat_cli,
            $ape_mat_cli,
            $dni_cli,
            $ruc_cli,
            $email_cli,
            $telefono_cli,
            $direccion_cli,
            $contacto_cli;
    //id
    public $id_cliente;
    //Usuario logueado
    public $usuario_logueado;
    //
    public 
    $listaTipoCliente = [],
    $listaTipoPersona = [];

    public function mount()
    {
        $this->show = 5;
        $this->listaTipoCliente = TipoCliente::all()->toArray();
        $this->listaTipoPersona = TipoPersona::all()->toArray();
    }

    public function render()
    {
        return view('livewire.cliente', [
            "clientes" => $this->getClientes()
        ]);
    }

    public function getClientes()
    {
        return ModelCliente::select('*')
            ->join('tipo_clientes', 'tipo_clientes.id_tipo_cliente', '=', 'clientes.id_tipo_cliente')
            ->join('tipo_personas', 'tipo_personas.id_tipo_persona', '=', 'clientes.id_tipo_persona')
            ->where('vigencia_cli', '=', 'SI')
            ->orderby('id_cliente', 'desc')->paginate($this->show);
    }



    public function guardar_usuario()
    {
        $mensajes=[
            'id_tipo_cliente.required' => 'Seleccionar tipo de cliente',
            'id_tipo_persona.required' => 'Seleccionar tipo de persona',
            'nombre_cli.required' => 'Por favor, ingresa el nombre del cliente',
            'dni_cli.required' => 'Por favor, ingresa el DNI del cliente',
        ];
        $this->validate([
            'id_tipo_cliente' => 'required',
            'id_tipo_persona' => 'required',
            'nombre_cli' => 'required',
            'dni_cli' => 'required|max:8|unique:clientes',
            'ruc_cli' => 'max:14|unique:clientes',
        ],$mensajes);

        ModelCliente::create([
            'id_empresa' => config('app.empresa','emp_1'),
            'id_tipo_cliente' => $this->id_tipo_cliente,
            'id_tipo_persona' => $this->id_tipo_persona,
            'razon_social_cli' => $this->razon_social_cli,
            'nombre_cli' => $this->nombre_cli,
            'ape_pat_cli' => $this->ape_pat_cli,
            'ape_mat_cli' => $this->ape_mat_cli,
            'dni_cli' => $this->dni_cli,
            'ruc_cli' => $this->ruc_cli,
            'email_cli' => $this->email_cli,
            'telefono_cli' => $this->telefono_cli,
            'direccion_cli' => $this->direccion_cli,
            'contacto_cli' => $this->contacto_cli,
            'vigencia_cli' => 'SI',
            'usuario_creacion'=> Auth::user()->name,
            'fecha_creacion'=> now(),
        ]);
        $this->default();
        $this->dispatchBrowserEvent('respuesta', ['res' => 'registró']);
    }


    public function edit($id)
    {
        $cliente = ModelCliente::find($id);
        $this->id_cliente  =    $cliente->id_cliente;
        $this->id_tipo_cliente  =    $cliente->id_tipo_cliente;
        $this->id_tipo_persona   =    $cliente->id_tipo_persona;
        $this->razon_social_cli =    $cliente->razon_social_cli;
        $this->nombre_cli      =    $cliente->nombre_cli;
        $this->ape_pat_cli =   $cliente->ape_pat_cli;
        $this->ape_mat_cli    =    $cliente->ape_mat_cli;
        $this->dni_cli =    $cliente->dni_cli;
        $this->ruc_cli =    $cliente->ruc_cli;
        $this->email_cli =    $cliente->email_cli;
        $this->telefono_cli =    $cliente->telefono_cli;
        $this->direccion_cli =    $cliente->direccion_cli;
        $this->contacto_cli =    $cliente->contacto_cli;

        $this->view = "edit";
    }

    public function default()
    {
        $this->view = "create";
        $this->id_cliente       = '';
        $this->id_tipo_cliente       = '';
        $this->id_tipo_persona      = '';
        $this->razon_social_cli = '';
        $this->nombre_cli     = '';
        $this->ape_pat_cli= '';
        $this->ape_mat_cli  = '';
        $this->dni_cli = '';
        $this->ruc_cli = '';
        $this->email_cli = '';
        $this->telefono_cli = '';
        $this->direccion_cli = '';
        $this->contacto_cli = '';
    }


    public function actualizar_usuario()
    {
        $mensajes=[
            'id_tipo_cliente.required' => 'Seleccionar tipo de cliente',
            'id_tipo_persona.required' => 'Seleccionar tipo de persona',
            'nombre_cli.required' => 'Por favor, ingresa el nombre del cliente',
            'dni_cli.required' => 'Por favor, ingresa el DNI del cliente',
        ];
        $this->validate([
            'id_tipo_cliente' => 'required',
            'id_tipo_persona' => 'required',
            'nombre_cli' => 'required',
            'dni_cli' => 'required|max:8',
            'ruc_cli' => 'max:14',
        ],$mensajes);

        $cliente = ModelCliente::find($this->id_cliente);
        $cliente->update([

            'id_tipo_cliente' => $this->id_tipo_cliente,
            'id_tipo_persona' => $this->id_tipo_persona,
            'razon_social_cli' => $this->razon_social_cli,
            'nombre_cli' => $this->nombre_cli,
            'ape_pat_cli' => $this->ape_pat_cli,
            'ape_mat_cli' => $this->ape_mat_cli,
            'dni_cli' => $this->dni_cli,
            'ruc_cli' => $this->ruc_cli,
            'email_cli' => $this->email_cli,
            'telefono_cli' => $this->telefono_cli,
            'direccion_cli' => $this->direccion_cli,
            'contacto_cli' => $this->contacto_cli,
            'usuario_modificacion'=> Auth::user()->name,
            'fecha_modificacion'=> now(),


        ]);
        $this->view = "create";
        $this->default();
        $this->dispatchBrowserEvent('respuesta', ['res' => 'actualizó']);
    }
    public function delete($id)
    {

        $usuario = ModelCliente::find($id);
        $usuario->update([
            'vigencia_cli'   => 'NO',
            'usuario_eliminacion'=> Auth::user()->name,
            'fecha_eliminacion'=> now(),

        ]);
        $this->default();
        $this->dispatchBrowserEvent('respuesta', ['res' => 'eliminó']);
    }
}
