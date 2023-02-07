<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempresa extends Model
{
    use HasFactory;
    protected $table = 'tempresa';
    protected $fillable = [
        'id',
        'id_docente',
        'id_empresa',
        'created_at',
        'updated_at'
    ];

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function fichas()
    {
        return $this->hasMany(FichaDual::class, 'id_tempresa');
    }
}
