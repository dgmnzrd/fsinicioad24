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

    function show( $id ) 
    {
        $pacientes = Paciente::Find( $id );
        if( $pacientes )
        {
            return response()->json( $pacientes, 200 );
        }
        else
        {
            return response()->json( [ "message"=>"No se encontro el paciente" ], 404 );
        }
    }

    // PACIENTE
    // nombre, apellido, edad, sexo
    function store( Request $request )
    {
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->edad = $request->edad;
        $paciente->sexo = $request->sexo;
        $paciente->save();
        return response()->json( $paciente, 201 );
    }

    function destroy( $id )
    {
        $paciente = Paciente::Find( $id );
        
        if( $paciente )
        {
            $paciente->delete();
            return response()->json([ 'message' => 'Medicina eliminada exitosamente.' ], 200 );
        }
        else
        {
            return response()->json([ 'message' => 'Medicina no encontrada.' ], 404 );
        }
    }

    public function update( Request $request, $id )
    {
        $paciente = Paciente::find( $id );

        if( !$paciente ) 
        {
            return response()->json( [ 'message' => 'Paciente not found' ], 404 );
        }

        $paciente->nombre = $request->input( 'nombre' );
        $paciente->apellido = $request->input( 'apellido' );
        $paciente->edad = $request->input( 'edad' );
        $paciente->sexo = $request->input( 'sexo' );
        $paciente->save();
        return response()->json( [ 'message' => 'Paciente actualizado correctamente', 'data' => $paciente ], 200 );
    }
}
