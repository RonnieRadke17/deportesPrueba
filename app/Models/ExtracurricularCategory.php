<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExtracurricularCategory
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Extracurricular[] $extracurriculars
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ExtracurricularCategory extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function extracurriculars()
    {
        return $this->hasMany('App\Models\Extracurricular', 'extracurricular_category_id', 'id');
    }
    

}
