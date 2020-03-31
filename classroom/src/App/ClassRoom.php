<?php

namespace Sibtain\Classroom\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\App\Traits\TableCache;
use Sibtain\Campuses\App\Campus;
use Sibtain\Subjects\App\Subject;
use Sibtain\Teachers\App\Teacher;

class ClassRoom extends Model
{
	use TableCache;

    protected $fillable = ['campus_id','name', 'abbreviation', 'session', 'batch', 'subject_id'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class);
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
