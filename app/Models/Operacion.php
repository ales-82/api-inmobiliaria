<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    protected $table = 'operaciones';

    protected $fillable = [
        'usuario_cliente_id',
        'usuario_agente_id',
        'propiedad_id',
        'tipo',
        'precio',
        'fecha',
        'estado',
        'observaciones'
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
