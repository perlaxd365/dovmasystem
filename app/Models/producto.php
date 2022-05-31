<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = "productos";
    
    protected $primaryKey = 'id_producto';
    
    protected $fillable = [
        //key
        'id_producto',
        'codigo_interno',
        //data producto
        'id_uni_med_stock',
        'id_uni_med_capacidad',
        'descripcion_pro',
        'capacidad_pro',
        'vigencia_pro'

    ];
}
