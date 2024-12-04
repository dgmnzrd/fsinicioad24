<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitasApiController extends Controller
{
    public function index()
    {
        $citas = Cita::paginate(10); // Paginación de 10 elementos por página
        return response()->json($citas, 200);
    }

    public function show($id)
    {
        $cita = Cita::find($id);
        if($cita) 
        {
            return response()->json($cita, 200);
        } 
        else 
        {
            return response()->json(['message' => 'Cita no encontrada'], 404);
        }
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

        return response()->json($cita, 201); // Cita creada exitosamente
    }

    public function destroy($id)
    {
        $cita = Cita::find($id);
        if($cita) 
        {
            $cita->delete();
            return response()->json(['message' => 'Cita eliminada exitosamente.'], 200);
        } 
        else 
        {
            return response()->json(['message' => 'Cita no encontrada.'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $cita = Cita::find($id);

        if(!$cita) 
        {
            return response()->json(['message' => 'Cita no encontrada'], 404);
        }

        $request->validate([
            'id_paciente' => 'sometimes|required|exists:pacientes,id',
            'id_doctor' => 'sometimes|required|exists:doctores,id',
            'fecha' => 'sometimes|required|date',
            'hora' => 'sometimes|required|date_format:H:i',
        ]);

        $cita->id_paciente = $request->input('id_paciente', $cita->id_paciente);
        $cita->id_doctor = $request->input('id_doctor', $cita->id_doctor);
        $cita->fecha = $request->input('fecha', $cita->fecha);
        $cita->hora = $request->input('hora', $cita->hora);
        $cita->save();

        return response()->json(['message' => 'Cita actualizada correctamente', 'data' => $cita], 200);
    }

}
