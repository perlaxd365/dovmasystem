<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        //key
        'id_empresa',
        'id_tipo_cliente',
        'id_tipo_persona',
        
        //datos de tabla
        'razon_social_cli',
        'ape_pat_cli',
        'ape_mat_cli',
        'nombre_cli',
        'dni_cli',
        'ruc_cli',
        'email_cli',
        'telefono_cli',
        'direccion_cli',
        'contacto_cli',
        'vigencia_cli',

        //datos de auditoria
        'usuario_creacion',
        'fecha_creacion',
        'usuario_modificacion',
        'fecha_modificacion',
        'usuario_eliminacion',
        'fecha_eliminacion',
    ];
}
