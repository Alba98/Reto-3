<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    use HasFactory;

    protected $table = 'notificaciones';

    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'mensaje',
        'fecha',
        'id_usuario'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
