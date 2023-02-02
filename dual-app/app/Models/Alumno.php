<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';
    protected $fillable = [
        'id',
        'id_persona',
        'id_grado',
        'curso',
        'dual',
        'created_at',
        'updated_at',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }
    
    public function evaluacionesDiarios()
    {
        return $this->hasMany(EvaluacionDiario::class, 'id_alumno');
    }

    public function evaluacionesTrabajos()
    {
        return $this->hasMany(EvaluacionTrabajo::class, 'id_alumno');
    }

    public function fichasSeguimientos()
    {
        return $this->hasMany(FichaSeguimiento::class, 'id_alumno');
    }

    public function fichasDuales()
    {
        return $this->hasMany(FichaDual::class, 'id_alumno');
    }  
    
    public function fichaDual()
    {
        return $this->hasOne(FichaDual::class, 'id_alumno')->latest();
    }
}
