<?php

namespace Sibtain\Companies\App\Http\Controllers\Company;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Http\Requests\ValidateCompanyRequest;
use Sibtain\Companies\App\Models\Company;

class Update extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateCompanyRequest $request, Company $company)
    {
        $this->authorize('update', $company);

        tap($company)->update($request->validated())
            ->updateMandatary($request->get('mandatary'));

        return ['message' => __('The company was successfully updated')];
    }
}
