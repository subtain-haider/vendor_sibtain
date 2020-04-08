<?php

namespace Sibtain\Students\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Companies\App\Models\Company;
use LaravelEnso\People\App\Models\Person;
use LaravelEnso\Tables\App\Traits\TableCache;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Subjects\App\Subject;

class Student extends Model
{
    use TableCache;

    protected $fillable = ['name', 'cnic', 'phone', 'email', 'father_name', 'father_cnic', 'father_phone', 'father_email', 'address', 'city', 'company_id', 'classroom_id', 'gender', 'status', 'dob'];
    protected $dates = ['dob'];



    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }



    public function subjects()
    {
        return $this->belongsToMany(Subject::class)->withTimestamps();
    }

//    public function subjectIds()
//    {
//        $subjectIds = $this->subjects->pluck('id');
//        return $this->subjects()->wherePivotIn('subject_id', $subjectIds);
////        return $this->subjects()->pluck('id');
//    }
//
//    public function updateMembers(array $subjectIds)
//    {
//        $synced = $this->subjects()->sync($subjectIds);
//        if (! empty($synced['attached']) || ! empty($synced['detached'])) {
//            $this->fireModelEvent('updated-subjects', false);
//        }
//    }
}
