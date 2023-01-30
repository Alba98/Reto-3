<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

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
}
