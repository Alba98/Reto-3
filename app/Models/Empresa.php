<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = [
        'id',
        'cif',
        'nombre',
        'sector',
        'direccion',
        'created_at',
        'updated_at',
    ];
    public function personas()
    {
        return $this->hasMany(Persona::class, 'id_empresa');
    }

    public function fichaDual()
    {
        return $this->hasMany(FichaDual::class, 'id_empresa');
    }

    public function fichaSeguimiento()
    {
        return $this->hasMany(FichaSeguimiento::class, 'id_empresa');
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'id_empresa');
    }

    public function evaluacionesDiarios()
    {
        return $this->hasMany(EvaluacionDiario::class, 'id_empresa');
    }

    public function evaluacionesTrabajos()
    {
        return $this->hasMany(EvaluacionTrabajo::class, 'id_empresa');
    }

    public function tutorEmpresa()
    {
        return $this->hasOne(TutorEmpresa::class, 'id_empresa');
    }

}
