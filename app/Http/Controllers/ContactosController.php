<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use App\Http\Requests\StoreContactosRequest;
use App\Http\Requests\UpdateContactosRequest;

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
