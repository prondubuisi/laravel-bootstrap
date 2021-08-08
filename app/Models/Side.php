<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Side extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type'];

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

        static::creating(function ($side) {
            $side->uid = Str::uuid();;
        });
    }
}
