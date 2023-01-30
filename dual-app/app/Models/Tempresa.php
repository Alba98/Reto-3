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
        'id_persona',
        'id_empresa',
        'created_at',
        'updated_at'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
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
