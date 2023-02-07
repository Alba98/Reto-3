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
   
    public function evaluacionDiario()
    {
        return $this->hasMany(EvaluacionDiario::class, 'id');
    }
    public function evaluacionTrabajo()
    {
        return $this->hasMany(EvaluacionTrabajo::class, 'id');
    }
}
