<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    /** @use HasFactory<\Database\Factories\ZonaFactory> */
    use HasFactory;
    protected $primaryKey = 'id_zona';
    protected $fillable = 
    [
        'nombre_zona',
        'tarifa_por_kg'
    ];

    public function envios(){
        //La relacion con la tabla Envios por medio de el id_zona (PK)
        return $this->hasMany(Envio::class,'id_zona');
    }
}
