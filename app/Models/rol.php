<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'idrol';
    public $timestamps = true;

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'rol_idrol');
    }
}
