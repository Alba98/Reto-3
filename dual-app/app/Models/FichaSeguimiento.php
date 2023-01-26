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
}
