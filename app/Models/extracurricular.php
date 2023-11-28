<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extracurricular extends Model
{
    protected $table = 'extracurricular';
    protected $primaryKey = 'IdExtracurricular';
    public $timestamps = true;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_idcategoria');
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'extracurricular_IdExtracurricular');
    }
}
