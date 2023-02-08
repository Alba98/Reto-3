<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'email',
        'clave',
        'id_persona',
        'tipo_usuario',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    public function notificaciones()
    {
        return $this->hasMany(Notificaciones::class);
    }
}
