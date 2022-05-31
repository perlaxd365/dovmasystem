<?php

namespace App\Http\Livewire;

use App\Models\producto as ModelsProducto;
use App\Models\unidadMedida;
use Livewire\Component;
use Livewire\WithPagination;

class Producto extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public
        //vista
        $view = "create",
        //id
        $id_producto,
        //datos de producto
        $codigo_interno,
        $id_uni_med_stock,
        $id_uni_med_capacidad,
        $descripcion_pro,
        $capacidad_pro;
        //busqueda
    public
        $busqueda;


    //listas
    public
        $uniMedStock = [],
        $uniMedCapacidad = [];


    public function mount()
    {

        $this->show = 5;
        $this->uniMedStock = unidadMedida::all()->toArray();
        $this->uniMedCapacidad = unidadMedida::all()->toArray();
    }

    public function render()
    {

        return view('livewire.producto', [
            "productos" => $this->getProductos()
        ]);
    }

    public function getProductos()
    {
        return ModelsProducto::select(
            'productos.descripcion_pro AS desc_pro',
            'capacidad_pro',
            'uni_stock.descripcion AS unidad_stock',
            'uni_capacidad.descripcion AS unidad_capacidad',
            )
            ->join('unidad_medidas as uni_stock', 'uni_stock.id_uni_med', '=', 'productos.id_uni_med_stock')
            ->join('unidad_medidas as uni_capacidad', 'uni_capacidad.id_uni_med', '=', 'productos.id_uni_med_capacidad')
            ->where(function ($query) {
                return $query
                    ->orWhere('productos.descripcion_pro', 'LIKE', '%' . $this->busqueda . '%');
            })
            ->where('vigencia_pro', '=', true)
            ->orderby('id_producto', 'desc')->paginate($this->show);
    }

    public function search(){
        $this->resetPage();
    }
}
