<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctoresApiController extends Controller
{
    function index()
    {
        $doctores = Doctor::paginate( 10 );
        return response()->json($doctores, 200);
    }

    function show( $id ) 
    {
        $doctor = Doctor::find( $id );
        if( $doctor ) 
        {
            return response()->json( $doctor, 200 );
        } 
        else
        {
            return response()->json( ["message" => "No se encontró el doctor"], 404 );
        }
    }

    function store( Request $request )
    {
        $doctor = new Doctor();
        $doctor->nombre = $request->nombre;
        $doctor->apellido = $request->apellido;
        $doctor->especialidad = $request->especialidad;
        $doctor->email = $request->email;
        $doctor->telefono = $request->telefono;
        $doctor->direccion = $request->direccion;
        $doctor->fecha_nacimiento = $request->fecha_nacimiento;
        $doctor->anos_experiencia = $request->anos_experiencia;
        $doctor->save();

        return response()->json( $doctor, 201 );
    }

    function destroy( $id )
    {
        $doctor = Doctor::find( $id );
        if( $doctor ) 
        {
            $doctor->delete();
            return response()->json( ['message' => 'Doctor eliminado exitosamente.'], 200 );
        } 
        else 
        {
            return response()->json( ['message' => 'Doctor no encontrado.'], 404 );
        }
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find( $id );

        if( !$doctor ) 
        {
            return response()->json( ['message' => 'Doctor no encontrado'], 404 );
        }

        $doctor->nombre = $request->input( 'nombre' );
        $doctor->apellido = $request->input( 'apellido' );
        $doctor->especialidad = $request->input( 'especialidad' );
        $doctor->email = $request->input( 'email' );
        $doctor->telefono = $request->input( 'telefono' );
        $doctor->direccion = $request->input( 'direccion' );
        $doctor->fecha_nacimiento = $request->input( 'fecha_nacimiento' );
        $doctor->anos_experiencia = $request->input( 'anos_experiencia' );
        $doctor->save();

        return response()->json( ['message' => 'Doctor actualizado correctamente', 'data' => $doctor], 200 );
    }
}
