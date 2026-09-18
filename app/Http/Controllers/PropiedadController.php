<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    public function index()
    {
        $propiedades = Propiedad::with('imagenes')->get();

        return response()->json($propiedades,200);
    }

    public function show($id)
    {
        $propiedad = Propiedad::with('imagenes')->find($id);

        if(!$propiedad)
        {
            return response()->json(['message'=>'vivienda no encontrado']);
        }

        return response()->json($propiedad, 200);
    }
}
