<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $table = 'evento';
    protected $primaryKey = 'IdEvento';
    public $timestamps = true;

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'IdEvento');
    }
}
