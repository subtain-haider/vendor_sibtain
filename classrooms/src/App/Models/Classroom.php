<?php

namespace Sibtain\Classrooms\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use LaravelEnso\Addresses\App\Traits\Addressable;
use LaravelEnso\Comments\App\Traits\Commentable;
use LaravelEnso\Discussions\App\Traits\Discussable;
use LaravelEnso\Documents\App\Traits\Documentable;
use LaravelEnso\DynamicMethods\App\Traits\Relations;
use LaravelEnso\Helpers\App\Traits\AvoidsDeletionConflicts;
use Sibtain\Classrooms\App\Models\Person;
use LaravelEnso\Rememberable\App\Traits\Rememberable;
use LaravelEnso\Tables\App\Traits\TableCache;
use LaravelEnso\TrackWho\App\Traits\CreatedBy;
use LaravelEnso\TrackWho\App\Traits\UpdatedBy;
use Sibtain\Teachers\App\Student;

class Classroom extends Model
{
    use Addressable, AvoidsDeletionConflicts, Commentable, CreatedBy, Discussable,
        Documentable, Relations, Rememberable, TableCache, UpdatedBy;

    protected $fillable = [
        'abbreviation', 'name', 'company_id'
    ];


    public function teacher()
    {
        return $this->belongsToMany(Student::class)
            ->withPivot('teacher_id');
    }

    public static function owner()
    {
        return App::make(static::class)
            ->cacheGet(config('enso.config.ownerClassroomId'));
    }
//
//    public function isTenant()
//    {
//        return $this->is_tenant;
//    }
//
//    public function scopeTenant($query)
//    {
//        $query->whereIsTenant(true);
//    }
//
//    public function mandatary()
//    {
//        return $this->people()
//            ->withPivot('position')
//            ->wherePivot('is_mandatary', true)
//            ->first();
//    }

    public function attachPerson(int $personId, ?string $position = null)
    {
        $this->teacher()->attach($personId, [
//            'is_main' => false,
//            'is_mandatary' => false,
//            'position' => $position,
        ]);
    }

//    public function updateMandatary(?int $mandataryId)
//    {
//        $pivotIds = $this->people->pluck('id')->reduce(fn ($pivot, $value) => $pivot
//            ->put($value, ['is_mandatary' => $value === $mandataryId]), new Collection()
//        )->toArray();
//
//        $this->people()->sync($pivotIds);
//    }
}
