<?php

namespace App\Domains\Meals\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
//use App\Domains\Meals\Http\Resources\SidesResource;

class MealsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->uid,
            'name' => $this->name,
            'sides' => SidesResource::collection($this->sides),
            'allergies' => AllergiesResource::collection($this->allergies),
        ];
    }
}
