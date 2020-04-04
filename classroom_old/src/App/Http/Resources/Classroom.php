<?php

namespace Sibtain\Classroom\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use LaravelEnso\TrackWho\App\Http\Resources\TrackWho;

class Classroom extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'abbreviation' => $this->abbreviation,
            'campus_id' => $this->campus_id,
            'subjectIds' => $this->subjectIds(),
            'subject' => TrackWho::collection($this->whenLoaded('subjects')),
//            'edit' => false,
        ];
    }
}
