<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionTrabajo extends Model
{
    use HasFactory;
    protected $table = 'evaluaciones_trabajo';
    protected $fillable = [
        'id_evaluacion',
        'id_calificacion',
        'created_at',
        'updated_at'
    ];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class, 'id_evaluacion');
    }

    public function calificacion()
    {
        return $this->belongsTo(Calificaciones::class, 'id_calificacion');
    }
    
}
