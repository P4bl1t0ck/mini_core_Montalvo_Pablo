<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    /*
    Aqui esta la parte de nuestro mini core

     */
    use HasFactory;

    protected $primaryKey = 'id_envio';    
    protected $fillable = 
    [
        'id_repartidor',
        'id_zona',
        'peso_kg',
        'fecha_envio'
    ];
    //Hacemos la relacion dentro de esta tabla envio, de otras tablas,

    protected $casts= 
    [
        'fecha_envio' => 'date' 
        //Esta hara un cast, haciendo que fecha_envio sea date
    ];

    public function repartidor()
    {
        return $this->belongsTo(Repartidor::class,'id_repartidor');
    }

    public function zona()
    {
        return $this->belongsTo(Zona::class,'id_zona');
    }
}
