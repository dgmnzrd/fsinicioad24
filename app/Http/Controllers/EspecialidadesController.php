<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class especialidadesController extends Controller
{
    //
    function index()
    {
        $especialidades = Especialidad::paginate( 10 );
        return view( 'especialidades', [ 'especialidades' => $especialidades ] );
    }
}
