<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vivienda;

class image_vivienda extends Model
{
    
    public function vivienda(){

        return $this->belongsTo(Vivienda::class);
    }
}
