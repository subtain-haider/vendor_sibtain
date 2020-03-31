<?php

namespace Sibtain\Companies\App\Http\Controllers\Company;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Http\Requests\ValidateCompanyRequest;
use Sibtain\Companies\App\Models\Company;

class Store extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateCompanyRequest $request, Company $company)
    {
        $company->fill($request->validated());

        $this->authorize('store', $company);

        $company->save();

        return [
            'message' => __('The company was successfully created'),
            'redirect' => 'administration.companies.edit',
            'param' => ['company' => $company->id],
        ];
    }
}
