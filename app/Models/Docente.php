<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table = 'docentes';
    protected $fillable = [
        'id',
        'id_persona',
        'created_at',
        'updated_at'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
}
