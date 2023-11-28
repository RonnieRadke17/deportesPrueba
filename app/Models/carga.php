<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carga extends Model
{
    protected $table = 'carga';
    protected $primaryKey = 'IdCarga';
    public $timestamps = true;

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'IdAlumno');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_idgrupo');
    }
}
