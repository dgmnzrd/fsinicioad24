<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicina;

class Vista1Controller extends Controller
{
     //
    function index() 
    {
        $medicinas = Medicina::paginate( 15 );
        return view( 'medicinas.index', [ 'medicinas' => $medicinas ] );
    }

    function show( $id ) 
    {
        $medicina = Medicina::Find( $id );
        return view( 'medicinas.show', compact( 'medicina' )  );
    }

    function create() 
    {
        return view( 'medicinas.create') ;
    }

    function store( Request $request )
    {
        $medicina = new Medicina();
        $medicina->clave = $request->clave;
        $medicina->nombre = $request->nombre;
        $medicina->precio = $request->precio;
        $medicina->save();
        return redirect()->route( 'medicinas.index' );
    }
    
    function destroy( $id )
    {
        $medicina = Medicina::Find( $id );
        $medicina -> delete();
        return redirect()->route( 'medicinas.index' );
    }

    function edit( $id )
    {
        $medicina = Medicina::Find( $id );
        return view( 'medicinas.edit', compact( 'medicina' ) );
    }

    function update( Request $request, $id )
    {
        $medicina = Medicina::Find( $id );
        $medicina->clave = $request->clave;
        $medicina->nombre = $request->nombre;
        $medicina->precio = $request->precio;
        $medicina->save();
        // Cuando son muchos campos
        // $medicina->update( $request -> all() );
        return redirect()->route( 'medicinas.index' );
    }
}
