<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Propiedad_imagen;


class Propiedad extends Model
{
    
    protected $table = 'propiedades';

    public function imagenes(){

        return $this->hasMany(Propiedad_imagen::class);
    }  
}
