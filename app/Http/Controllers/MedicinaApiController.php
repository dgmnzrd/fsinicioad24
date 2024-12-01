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

    function show( $id ) 
    {
        $medicina = Medicina::Find( $id );
        if( $medicina )
        {
            return response()->json( $medicina, 200 );
        }
        else
        {
            return response()->json( [ "message"=>"No se encontro la medicina" ], 404 );
        }
    }

    function store( Request $request )
    {
        $medicina = new Medicina();
        $medicina->clave = $request->clave;
        $medicina->nombre = $request->nombre;
        $medicina->precio = $request->precio;
        $medicina->save();
        return response()->json( $medicina, 201 );
    }

    function destroy( $id )
    {
        $medicina = Medicina::Find( $id );
        
        if( $medicina )
        {
            $medicina->delete();
            return response()->json([ 'message' => 'Medicina eliminada exitosamente.' ], 200 );
        }
        else
        {
            return response()->json([ 'message' => 'Medicina no encontrada.' ], 404 );
        }
    }

    public function update( Request $request, $id )
    {
        $medicina = Medicina::find( $id );

        if( !$medicina ) 
        {
            return response()->json( [ 'message' => 'Medicina no encontrada' ], 404 );
        }

        $medicina->clave = $request->input( 'clave' );
        $medicina->nombre = $request->input( 'nombre' );
        $medicina->precio = $request->input( 'precio' );
        $medicina->save();
        return response()->json( [ 'message' => 'Medicina actualizada correctamente', 'data' => $medicina ], 200 );
    }
}
