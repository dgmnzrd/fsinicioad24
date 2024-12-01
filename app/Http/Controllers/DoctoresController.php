<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctoresController extends Controller
{
    //
    function index() 
    {
        $doctores = Doctor::paginate(10);
        return view('doctores.index', ['doctores' => $doctores]);
    }

    function show($id) 
    {
        $doctor = Doctor::find($id);
        return view('doctores.show', compact('doctor'));
    }

    function create() 
    {
        return view('doctores.create');
    }

    function store(Request $request)
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

        return redirect()->route('doctores.index');
    }

    function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('doctores.index');
    }

    function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctores.edit', compact('doctor'));
    }

    function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->nombre = $request->nombre;
        $doctor->apellido = $request->apellido;
        $doctor->especialidad = $request->especialidad;
        $doctor->email = $request->email;
        $doctor->telefono = $request->telefono;
        $doctor->direccion = $request->direccion;
        $doctor->fecha_nacimiento = $request->fecha_nacimiento;
        $doctor->anos_experiencia = $request->anos_experiencia;
        $doctor->save();

        return redirect()->route('doctores.index');
    }
}
