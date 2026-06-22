<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    /** @use HasFactory<\Database\Factories\RepartidorFactory> */
    use HasFactory;

    protected $primaryKey = 'id_repartidor';

    protected $fillable = 
        [
        'nombre',
        'email'
        ];

    public function envios()
    {
        //Relacioon muchos a la tabla Envio
        return $this->hasMany(Envio::class,'id_repartidor');
    }
}
