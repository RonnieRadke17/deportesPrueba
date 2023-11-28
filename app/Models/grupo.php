<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    protected $table = 'grupo';
    protected $primaryKey = 'idgrupo';
    public $timestamps = true;

    public function extracurricular()
    {
        return $this->belongsTo(Extracurricular::class, 'extracurricular_IdExtracurricular');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'Periodo_idPeriodo');
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'profesor_IdProfesor');
    }

    public function carga()
    {
        return $this->hasMany(Carga::class, 'grupo_idgrupo');
    }
}
