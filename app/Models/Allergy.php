<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Illuminate\Support\Str;


class Allergy extends Model
{
    use HasFactory, HasJsonRelationships;
    protected $fillable = ['name'];

    /**
     * returns the Meal associated with Allergy
     * @return HasJsonRelationships 
     */
    public function meals()
    {
        return $this->hasManyJson(Meal::class, 'name');
    }

    /**
    * Boot the Model.
    */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($allergy) {
            $allergy->uid = Str::uuid();;
        });
    }
}
