<?php

namespace Sibtain\Teachers\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\App\Traits\TableCache;
use Sibtain\Campuses\App\Campus;
use Sibtain\Classroom\App\ClassRoom;
use Sibtain\Subjects\App\Subject;

class Teacher extends Model
{
    use TableCache;

    protected $fillable = ['name', 'cnic', 'phone_number', 'email', 'qualification', 'campus_id', 'status', 'joining_date'];
    protected $dates = ['joining_date'];

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class);
    }



    public function subjects()
    {
        return $this->belongsToMany(Subject::class)->withTimestamps();
    }

    public function subjectIds()
    {
        $subjectIds = $this->subjects->pluck('id');
        return $this->subjects()->wherePivotIn('subject_id', $subjectIds);
//        return $this->subjects()->pluck('id');
    }

    public function updateMembers(array $subjectIds)
    {
        $synced = $this->subjects()->sync($subjectIds);
        if (! empty($synced['attached']) || ! empty($synced['detached'])) {
            $this->fireModelEvent('updated-subjects', false);
        }
    }
}
