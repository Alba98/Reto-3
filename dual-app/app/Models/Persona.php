<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'id',
        'nombre',
        'dni',
        'ape1',
        'ape2',
        'telefono',
        'created_at',
        'updated_at'
    ];


    public function grado()
    {
        return $this->hasOne(Grado::class);
    }
    public function tuniversidad()
    {
        return $this->hasOne(Tuniversidad::class);
    }
    public function tempresa()
    {
        return $this->hasOne(Tempresa::class);
    }
    public function alumno()
    {
        return $this->hasOne(Alumno::class);
    }
    public function empresa()
    {
        return $this->hasOne(Empresa::class);
    }
}
