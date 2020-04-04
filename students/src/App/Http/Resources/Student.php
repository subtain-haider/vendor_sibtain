<?php

namespace Sibtain\Students\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use LaravelEnso\TrackWho\App\Http\Resources\TrackWho;

class Student extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'cnic' => $this->cnic,
            'phone' => $this->phone,
            'email' => $this->email,
            'company_id' => $this->company_id,
            'class_id' => $this->class_id,
            'gender' => $this->gender,
            'father_name' => $this->name,
            'father_cnic' => $this->cnic,
            'father_phone' => $this->phone,
            'father_email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
        ];
    }
}
