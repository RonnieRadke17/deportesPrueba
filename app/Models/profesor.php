<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    protected $table = 'profesor';
    protected $primaryKey = 'IdProfesor';
    public $timestamps = true;

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'profesor_IdProfesor');
    }
}
