<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctoresApiController extends Controller
{
    function index()
    {
        $doctores = Doctor::all();
        return response()->json( $doctores, 200 );
    }
}
