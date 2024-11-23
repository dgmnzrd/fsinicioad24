<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadesApiController extends Controller
{
    function index()
    {
        $especialidades = Especialidad::all();
        return response()->json( $especialidades, 200 );
    }
}
