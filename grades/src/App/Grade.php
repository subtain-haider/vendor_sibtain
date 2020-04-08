<?php

namespace Sibtain\Grades\App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use LaravelEnso\Companies\App\Models\Company;
use LaravelEnso\Tables\App\Traits\TableCache;

class Grade extends Model
{
	use TableCache;

    protected $fillable = [
        'abbreviation', 'name', 'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopeVisible($query)
    {
//        return fn ($groups) => $groups->whereId($query);
//        $fromAdminGroup = Auth::user()->belongsToAdminGroup();
//
//        return $query->when(! $fromAdminGroup, fn ($query) => $query->whereHas(
//            'userGroups',
//            fn ($groups) => $groups->whereId(Auth::user()->group_id)
//        ));
    }
}
