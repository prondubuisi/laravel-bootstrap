<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

class Meal extends Model
{
    use HasFactory, HasJsonRelationships;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'side_ids' => 'json',
        'allergy_ids' => 'json',
    ];

    protected $fillable = ['name','side_ids','allergy_ids'];

    /**
    * Boot the Model.
    */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($meal) {
            $meal->uid = Str::uuid();;
        });
    }

    /**
     * returns the Meal associated with Allergies
     * @return BelongsTo 
     */
    public function allergies()
    {
        return $this->belongsToJson(Allergy::class,'allergy_ids');
    }

    /**
     * returns the Meal associated with Sides
     * @return BelongsTo 
     */
    public function sides()
    {
        return $this->belongsToJson(Side::class,'side_ids');
    }


}
