<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    use HasFactory;
    protected $table = 'calificaciones';
    protected $fillable = [
        'id',
        'fecha',
        'id_ficha',
        'id_ficha_seguimiento',
        //'id_evaluacion',
        'created_at',
        'updated_at'
    ];

    public function ficha()
    {
        return $this->belongsTo(FichaDual::class, 'id_ficha');
    }

    public function fichaSeguimiento()
    {
        return $this->belongsTo(FichaSeguimiento::class, 'id_ficha_seguimiento');
    }

    // public function evaluacion()
    // {
    //     return $this->belongsTo(Evaluacion::class, 'id_evaluacion');
    // }

    public function evaluacionTrabajo()
    {
        return $this->hasMany(EvaluacionTrabajo::class, 'id_calificacion');
    }

    public function evaluacionDiario()
    {
        return $this->hasMany(EvaluacionDiario::class, 'id_calificacion');
    }
}
