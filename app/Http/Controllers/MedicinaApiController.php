<?php

namespace App\Http\Controllers;

use App\Models\Medicina;
use Illuminate\Http\Request;

class MedicinaApiController extends Controller
{
    function index()
    {
        $medicinas = Medicina::all();
        return response()->json( $medicinas, 200 );
    }
}
