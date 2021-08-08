<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Illuminate\Support\Str;


class Allergy extends Model
{
    use HasFactory, HasJsonRelationships;
    protected $fillable = ['name'];

    /**
     * returns the Meal associated with Allergy
     * @return BelongsTo 
     */
    public function meals()
    {
        return $this->hasManyJson(meal::class, 'allergy_ids');
    }

    /**
    * Boot the Model.
    */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($protien) {
            $protien->uid = Str::uuid();;
        });
    }
}
