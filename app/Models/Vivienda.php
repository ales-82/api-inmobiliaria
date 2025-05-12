<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\image_vivienda;

class Vivienda extends Model
{
    /** @use HasFactory<\Database\Factories\ViviendaFactory> */
    use HasFactory;

    public function imagenes(){

        return $this->hasMany(image_vivienda::class);
    }    
}
