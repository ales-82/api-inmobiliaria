<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Visita extends Model
{
    protected $table = 'visitas';

    protected $fillable = [
        'usuario_cliente_id',
        'usuario_agente_id',
        'propiedad_id',
        'fecha',
        'hora',
        'observaciones',
        'estado'
    ];

    //Relaciones
    public function cliente()
    {
        return $this->belongsTo(User::class,'usuario_cliente_id');
    }

    public function agente()
    {
        return $this->belongsTo(User::class,'usuario_agente_id');
    }

    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }


}
