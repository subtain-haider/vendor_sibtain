<?php

namespace Sibtain\Teachers\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Companies\App\Models\Company;
use LaravelEnso\People\App\Models\Person;
use LaravelEnso\Tables\App\Traits\TableCache;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Subjects\App\Subject;

class Teacher extends Model
{
    use TableCache;

    protected $fillable = ['name', 'cnic', 'phone_number', 'email', 'qualification', 'company_id', 'status', 'joining_date'];
    protected $dates = ['joining_date'];


    public function hasUser()
    {
        return $this->user()->exists();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class);
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
