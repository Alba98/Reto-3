<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionDiario extends Model
{
    use HasFactory;
    protected $table = 'evaluaciones_diarios';
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

    public function diarioAprendizaje()
    {
        return $this->hasOne(DiarioAprendizaje::class, 'id_evaluacion_diario');
    }
}
