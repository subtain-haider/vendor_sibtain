<?php

namespace Sibtain\Subjects\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\App\Traits\TableCache;
use Sibtain\Teachers\App\Teacher;

class Subject extends Model
{
	use TableCache;

    protected $fillable = [
        'code', 'name'
    ];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
