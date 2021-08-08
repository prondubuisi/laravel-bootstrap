<?php

namespace App\Domains\Meals\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SidesResource extends JsonResource
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
            'type' => $this->type
        ];
    }
}
