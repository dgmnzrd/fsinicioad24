<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class EspecialidadesController extends Controller
{
    //
    function index()
    {
        $especialidades = Especialidad::paginate( 10 );
        return view( 'especialidades.index', [ 'especialidades' => $especialidades ] );
    }

    function show( $id ) 
    {
        $especialidad = Especialidad::Find( $id );
        return view( 'especialidades.show', compact( 'especialidad' )  );
    }

    function create() 
    {
        return view( 'especialidades.create') ;
    }

    function store( Request $request )
    {
        $especialidad = new Especialidad();
        $especialidad->nombre = $request->nombre;
        $especialidad->descripcion = $request->descripcion;
        $especialidad->save();
        return redirect()->route( 'especialidades.index' );
    }

    function destroy( $id )
    {
        $especialidad = Especialidad::Find( $id );
        $especialidad -> delete();
        return redirect()->route( 'especialidades.index' );
    }

    function edit( $id )
    {
        $especialidad = Especialidad::Find( $id );
        return view( 'especialidades.edit', compact( 'especialidad' ) );
    }

    function update( Request $request, $id )
    {
        $especialidad = Especialidad::Find( $id );
        $especialidad->nombre = $request->nombre;
        $especialidad->descripcion = $request->descripcion;
        $especialidad->save();
        return redirect()->route( 'especialidades.index' );
    }
}
