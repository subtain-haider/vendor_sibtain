<?php

namespace Sibtain\Teachers\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use LaravelEnso\TrackWho\App\Http\Resources\TrackWho;

class Teacher extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'cnic' => $this->cnic,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'qualification' => $this->qualification,
            'campus_id' => $this->campus_id,
            'subjectIds' => $this->subjectIds(),
            'subject' => TrackWho::collection($this->whenLoaded('subjects')),
//            'edit' => false,
        ];
    }
}
