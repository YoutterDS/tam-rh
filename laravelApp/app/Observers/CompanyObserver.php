<?php

namespace App\Observers;

use App\Models\Company;
use Illuminate\Support\Facades\Log;
use App\Notifications\CompanyUpdated;

class CompanyObserver
{
    /**
     * Listen to the User updating event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updating( Company $company )
    {
        if( $company->isDirty() ){
            // Send email to Admin TAM-RH if the admin user is active
            if( auth()->user()->active === 'Y') {
                $company->notify(new CompanyUpdated($company));
            }
        }
    }
}
