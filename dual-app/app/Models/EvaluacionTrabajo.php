<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionTrabajo extends Model
{
    use HasFactory;
    protected $table = 'evaluaciones_trabajos';
    protected $fillable = [
        'id',
        'id_evaluacion',
        'created_at',
        'updated_at'
    ];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class, 'id_evaluacion');
    }
    
}
