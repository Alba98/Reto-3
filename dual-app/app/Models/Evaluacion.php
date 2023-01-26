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
}
