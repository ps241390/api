<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'release_year' => $this->release_year,
            'director' => $this->director,
            'rating' => $this->rating,
            'duration' => $this->duration,
            'duration_formatted' => sprintf('%d uur %d minuten',
                floor($this->duration / 60),
                $this->duration % 60
            ),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
