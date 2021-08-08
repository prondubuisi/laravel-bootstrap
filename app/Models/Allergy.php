<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;


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

     /**
     * Gets a Allergy by uid
     *
     * @param string $gatewayUid
     *
     * @return Collection|Builder|null
     */
    public static function findByUid(string $networkUid)
    {
        return self::query()->where('uid', $networkUid)->first();
    }
}
