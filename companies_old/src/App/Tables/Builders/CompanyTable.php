<?php

namespace Sibtain\Companies\App\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use Sibtain\Companies\App\Models\Company;
use LaravelEnso\Tables\App\Contracts\Table;

class CompanyTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/companies.json';

    public function query(): Builder
    {
        return Company::selectRaw('
            companies.id, companies.code, companies.name,  people.name as mandatary,
            companies.email,
            companies.phone,  companies.status, companies.status as statusValue,
            companies.is_tenant, companies.created_at
        ')->leftJoin(
            'company_person',
            fn ($join) => $join
                ->on('companies.id', '=', 'company_person.company_id')
                ->where('company_person.is_mandatary', true)
        )->leftJoin('people', 'company_person.person_id', '=', 'people.id');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
