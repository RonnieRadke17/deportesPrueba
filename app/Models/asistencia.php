<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    protected $table = 'asistencia';
    protected $primaryKey = 'IdAsistencia';
    public $timestamps = true;

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'IdEvento');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'IdAlumno');
    }
}
