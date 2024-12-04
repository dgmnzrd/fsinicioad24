<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Doctor;
use App\Models\Paciente;

class CitasController extends Controller
{
    public function index()
    {
        $citas = Cita::paginate(10);
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        return view('citas.create', compact('pacientes', 'doctores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_paciente' => 'required|exists:pacientes,id',
            'id_doctor' => 'required|exists:doctores,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        $cita = new Cita();
        $cita->id_paciente = $request->id_paciente;
        $cita->id_doctor = $request->id_doctor;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->save();

        return redirect()->route('citas.index')->with('success', 'Cita creada exitosamente.');
    }

    public function show($id)
    {
        $cita = Cita::findOrFail($id);
        return view('citas.show', compact('cita'));
    }

    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        return view('citas.edit', compact('cita', 'pacientes', 'doctores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_paciente' => 'required|exists:pacientes,id',
            'id_doctor' => 'required|exists:doctores,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        $cita = Cita::findOrFail($id);
        $cita->id_paciente = $request->id_paciente;
        $cita->id_doctor = $request->id_doctor;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->save();

        return redirect()->route('citas.index')->with('success', 'Cita actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'Cita eliminada exitosamente.');
    }
}
