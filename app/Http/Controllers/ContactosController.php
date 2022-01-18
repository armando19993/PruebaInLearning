<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
  
    public function index()
    {
        $contactos = Contactos::all();
        $total = $contactos->count();

        return response()->json([
            'data' => $contactos,
            'total' => $total
        ]);
    }

    public function show( Contactos $contacto )
    {
        return response()->json([
            'data' => $contacto
        ]);
    }

    public function store(Request $request)
    {
        $new = new Contactos();
        $new->nombre = $request->nombre;
        $new->correo = $request->correo;
        $new->imagen = $request->imagen;
        $new->save();

        return response()->json([
            'data' => $new,
            'message' => "Estudiante Creado con exito",
        ]);
    }

    public function update(Request $request, Contactos $contacto)
    {
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->imagen = $request->imagen;
        $contacto->save();

        return response()->json([
            'data' => $contacto,
            'message' => "Estudiante Editado con exito",
        ]);
    }

    public function search( $q )
    {
        $contactos = Contactos::where('nombre', 'like', "%$q%")->get();
        $total = $contactos->count();

        return response()->json([
            'data' => $contactos,
            'total' => $total
        ]);
    }
}
