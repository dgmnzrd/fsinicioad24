<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    // Si la tabla no sigue la convención de pluralización, puedes definirla explícitamente
    protected $table = 'citas';

    // Definir qué campos son asignables masivamente
    protected $fillable = [
        'id_paciente', 
        'id_doctor', 
        'fecha', 
        'hora',
    ];

    // Relación con el modelo Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    // Relación con el modelo Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor');
    }
}
