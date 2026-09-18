<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Rol extends Model
{
    protected $table = "roles";

    protected $fillable = ['perfil'];

    public function usuarios(){

        return $this->hasMany(User::class);
    }
}
