<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario  extends Authenticatable 
{
    use HasFactory;
    protected $table = 'usuarios';
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

    //Scopes:
    public function scopeIsCoordinador($query){ 
        return $this->tipo_person == 'coordinador' ? true : false ;
    }

}
