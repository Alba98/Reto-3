<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaSeguimiento extends Model
{
    use HasFactory;
    protected $table = 'fichas_seguimientos';
    protected $fillable = [
        'id',
        'fecha',
        'asistentes',
        'tipo_tutoria',
        'objetivos',
        'resumen',
        'id_fichadual',
        'created_at',
        'updated_at'
    ];

    public function fichadual()
    {
        return $this->belongsTo(FichaDual::class, 'id_fichadual');
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'id_fichaSeguimiento');
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id_tutor');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'id_alumno');
    }
}
