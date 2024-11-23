<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacientesApiController extends Controller
{
    function index()
    {
        $pacientes = Paciente::all();
        return response()->json( $pacientes, 200 );
    }
}
