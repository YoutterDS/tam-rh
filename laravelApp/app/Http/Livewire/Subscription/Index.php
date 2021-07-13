<?php

namespace App\Http\Livewire\Subscription;

use Exception;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $userCanEdit;
    public $company, $myPlan;

    public function mount()
    {
        $this->userCanEdit          = User::find(auth()->user()->id)->hasRole(['super-admin', 'admin']);
    }

    public function render()
    {
        $this->company              = auth()->user()->company;
        $this->myPlan               = $this->company->subscriptions()->get()->first()->plan_id;

        return view('livewire.subscription.index');
    }

    public function changePlan($planId)
    {
        if( $this->userCanEdit ) {
            try {
                $plan               = app('rinvex.subscriptions.plan')->find($planId);

                $subscription_plan  = $this->company->subscriptions()->get()->first()->id;
                $subscription       = app('rinvex.subscriptions.plan_subscription')->find($subscription_plan);
                $subscription->changePlan($plan);

                $this->myPlan       = $this->company->subscriptions()->get()->first()->plan_id;
                $this->emit('successful');
            } catch ( Exception $e ){
                // $this->emit('error', $e->getMessage());
                $this->emit('error');
            }
        } else {
            $this->emit('user-cannot-edit');
        }
    }
}
