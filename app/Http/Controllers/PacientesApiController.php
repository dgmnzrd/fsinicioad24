<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacientesApiController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::paginate( 10 );
        return response()->json( $pacientes, 200 );
    }

    public function show( $id )
    {
        $paciente = Paciente::find( $id );
        if( $paciente ) 
        {
            return response()->json( $paciente, 200 );
        } 
        else 
        {
            return response()->json( ["message" => "No se encontró el paciente"], 404 );
        }
    }

    public function store( Request $request )
    {
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->edad = $request->edad; // Cambié a edad
        $paciente->sexo = $request->sexo; // Cambié a sexo
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->email = $request->email;
        $paciente->diagnostico = $request->diagnostico; // Cambié a diagnóstico
        $paciente->save();

        return response()->json( $paciente, 201 );
    }

    public function destroy( $id )
    {
        $paciente = Paciente::find( $id );
        if( $paciente ) 
        {
            $paciente->delete();
            return response()->json( [ 'message' => 'Paciente eliminado exitosamente.' ], 200 );
        } 
        else
        {
            return response()->json( [ 'message' => 'Paciente no encontrado.' ], 404 );
        }
    }

    public function update( Request $request, $id )
    {
        $paciente = Paciente::find( $id );

        if( !$paciente ) 
        {
            return response()->json( [ 'message' => 'Paciente no encontrado' ], 404 );
        }

        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->edad = $request->input('edad'); 
        $paciente->sexo = $request->input('sexo'); 
        $paciente->direccion = $request->input('direccion');
        $paciente->telefono = $request->input('telefono');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->email = $request->input('email');
        $paciente->diagnostico = $request->input('diagnostico'); 
        $paciente->save();

        return response()->json( [ 'message' => 'Paciente actualizado correctamente', 'data' => $paciente ], 200 );
    }
}
