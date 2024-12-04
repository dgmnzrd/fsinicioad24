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
        return view( 'pacientes.index', [ 'pacientes' => $pacientes ] );
    }

    function show( $id ) 
    {
        $paciente = Paciente::Find( $id );
        return view( 'pacientes.show', compact( 'paciente' )  );
    }

    function create() 
    {
        return view( 'pacientes.create') ;
    }

    function store( Request $request )
    {
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->edad = $request->edad;
        $paciente->sexo = $request->sexo;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->email = $request->email;
        $paciente->diagnostico = $request->diagnostico; 
        $paciente->save();
        return redirect()->route( 'pacientes.index' );
    }

    function destroy( $id )
    {
        $paciente = Paciente::Find( $id );
        $paciente -> delete();
        return redirect()->route( 'pacientes.index' );
    }

    function edit( $id )
    {
        $paciente = Paciente::Find( $id );
        return view( 'pacientes.edit', compact( 'paciente' ) );
    }

    function update( Request $request, $id )
    {
        $paciente = Paciente::Find( $id );
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->edad = $request->edad;
        $paciente->sexo = $request->sexo;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->email = $request->email;
        $paciente->diagnostico = $request->diagnostico;
        $paciente->save();
        return redirect()->route( 'pacientes.index' );
    }
}
