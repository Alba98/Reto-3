<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiarioAprendizaje extends Model
{
    use HasFactory;
    protected $table = 'diarios_aprendizajes';
    protected $fillable = [
        'id',
        'periodo',
        'actividades',
        'reflexion',
        'problemas',
        'id_ficha',
        'created_at',
        'updated_at'
    ];

    public function ficha()
    {
        return $this->belongsTo(FichaDual::class, 'id_ficha');
    }
}
