<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{
    //
    function index() 
    {
        $pacientes = Paciente::paginate( 10 );
        return view( 'pacientes', [ 'pacientes' => $pacientes ] );
    }
}
