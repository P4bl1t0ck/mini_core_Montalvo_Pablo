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
    //Hacemos la relacion dentro de esta tabla envio, de otras tablas, con sus FK haciendo las referenfia
    //Haciendo uso de ORM o Eloquent aqui.

    protected $casts= 
    [
        'fecha_envio' => 'date',
        //Esta hara un cast, haciendo que fecha_envio sea date osea fechas como hoy
        //Tipo 'd/m/y' accediendo en un dato tipo carbon, de la libreria de Laravel.
    ];

    public function repartidor()
    {
        //Relacionamos al 'id_repartidor' con la clase repartidos
        return $this->belongsTo(Repartidor::class,'id_repartidor');
    }

    public function zona()
    {
        //Relacionamos tambien a 'id_zona' dentro de Zona
        return $this->belongsTo(Zona::class,'id_zona');
    }
}
