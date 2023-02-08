<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $table = 'grados';
    protected $fillable = [
        'id',
        'nombre'
    ];

    public function coordinadores()
    {
        return $this->hasMany(Coordinador::class, 'id_grado');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'id_grado');
    }
}
