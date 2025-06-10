<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'region' => $this->region,
            'start_date' => $this->start_date,
            'number_of_people' => $this->number_of_people,
            'duration_days' => $this->duration_days,
            'price_per_person' => $this->price_per_person,
            'created_at' => $this->created_at,
        ];
    }
}
