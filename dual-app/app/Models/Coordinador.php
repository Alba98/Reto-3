<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    use HasFactory;
    protected $table = 'coordinadores';
    protected $fillable = [
        'id_docente',
        'id_grado',
        'created_at',
        'updated_at'
    ];

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }
    
    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }
}
