<?php

namespace Sibtain\Classroom\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\App\Traits\TableCache;
use Sibtain\Campuses\App\Campus;
use Sibtain\Teachers\App\Teacher;

class ClassRoom extends Model
{
	use TableCache;

    protected $fillable = ['campus_id','name', 'abbreviation', 'session', 'batch', 'teacher_id'];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

}
