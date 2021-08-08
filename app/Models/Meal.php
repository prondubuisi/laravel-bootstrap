<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Meal extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'side_ids' => 'array',
        'allergy_ids' => 'array'
    ];

    protected $fillable = ['name','side_ids','allergy_ids'];

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

    /**
     * returns the Meal associated with Allergy
     * @return BelongsTo 
     */
    public function allergies()
    {
        return $this->belongsToJson(Allergy::class,'name');
    }


}
