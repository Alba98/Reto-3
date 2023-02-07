<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionTrabajo extends Model
{
    use HasFactory;
    protected $table = 'evaluaciones_trabajo';
    protected $fillable = [
        'id',
        'id_calificacion',
        'created_at',
        'updated_at'
    ];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class, 'id');
    }

    public function calificacion()
    {
        return $this->belongsTo(Calificaciones::class, 'id_calificacion');
    }
    
}
