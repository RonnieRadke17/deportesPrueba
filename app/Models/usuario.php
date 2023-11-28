<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    public $timestamps = true;

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_idrol');
    }
}
