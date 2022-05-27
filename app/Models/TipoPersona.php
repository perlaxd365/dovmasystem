<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    use HasFactory;   
    protected $fillable = [
        //key
        'id_tipo_persona',
        
        //datos de tabla
        'descripcion',
        
    ];
}
