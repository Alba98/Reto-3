<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuniversidad extends Model
{
    use HasFactory;
    protected $table = 'tuniversidad';
    protected $fillable = [
        'id',
        'id_docente',
        'created_at',
        'updated_at'
    ];


    public function docente()
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }

    public function fichas()
    {
        return $this->hasMany(FichaDual::class, 'id_tuniversidad');
    }
}
