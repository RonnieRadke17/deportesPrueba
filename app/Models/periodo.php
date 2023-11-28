<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    protected $table = 'Periodo';
    protected $primaryKey = 'idPeriodo';
    public $timestamps = true;

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'Periodo_idPeriodo');
    }
}
