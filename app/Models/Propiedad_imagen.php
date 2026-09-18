<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Propiedad;

class Propiedad_imagen extends Model
{
    protected $table = 'propiedades_imagenes';

    public function propiedad(){

        return $this->belongsTo(Propiedad::class);
    }
}
