<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    use HasFactory;
    
    protected $fillable = [
        //key
        'id_tipo_cliente',
        'id_empresa',
        
        //datos de tabla
        'nombre_tipo',
        
        //datos de auditoria
        'usuario_creacion',
        'fecha_creacion',
        'usuario_modificacion',
        'fecha_modificacion',
        'usuario_eliminacion',
        'fecha_eliminacion',
    ];
}
