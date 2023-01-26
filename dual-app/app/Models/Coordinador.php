<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    use HasFactory;
    protected $table = 'coordinadores';
    protected $fillable = [
        'id_persona',
        'id_grado',
        'created_at',
        'updated_at'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }
}
