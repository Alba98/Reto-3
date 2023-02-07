<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $table = 'evaluaciones';
    protected $fillable = [
        'id',
        'indicador',
        'valoracion',
        'observacion',
        'created_at',
        'updated_at'
    ];
    public function calificaciones()
    {
        return $this->hasMany(Calificaciones::class, 'id_evaluacion');
    }
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'id_alumno');
    }
    public function fichaSeguimiento()
    {
        return $this->belongsTo(FichaSeguimiento::class, 'id_fichaSeguimiento');
    }
    public function evaluacionDiario()
    {
        return $this->hasMany(EvaluacionDiario::class, 'id_evaluacion');
    }
    public function evaluacionTrabajo()
    {
        return $this->hasMany(EvaluacionTrabajo::class, 'id_evaluacion');
    }
}
