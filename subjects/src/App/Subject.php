<?php

namespace Sibtain\Subjects\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\App\Traits\TableCache;
use Sibtain\Classroom\App\ClassRoom;
use Sibtain\Teachers\App\Student;

class Subject extends Model
{
	use TableCache;

    protected $fillable = [
        'code', 'name'
    ];

    public function classroom()
    {
        return $this->belongsToMany(ClassRoom::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(Student::class);
    }
}
