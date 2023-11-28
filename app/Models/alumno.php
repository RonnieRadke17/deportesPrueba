<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $table = 'alumno';
    protected $primaryKey = 'IdAlumno';
    public $timestamps = true;

    public function carga()
    {
        return $this->hasMany(Carga::class, 'IdAlumno');
    }
}
