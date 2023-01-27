<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaDual extends Model
{
    use HasFactory;
    protected $table = 'fichas_duales';
    protected $fillable = [
        'id',
        'id_empresa',
        'id_alumno',
        'id_tempresa',
        'id_tuniversidad',
        'created_at',
        'updated_at'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'id_alumno');
    }

    public function tempresa()
    {
        return $this->belongsTo(Tempresa::class, 'id_tempresa');
    }

    public function tuniversidad()
    {
        return $this->belongsTo(Tuniversidad::class, 'id_tuniversidad');
    }
}