<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = [
        'id',
        'cif',
        'nombre',
        'sector',
        'direccion',
        'created_at',
        'updated_at'
    ];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'id_empresa');
    }
}