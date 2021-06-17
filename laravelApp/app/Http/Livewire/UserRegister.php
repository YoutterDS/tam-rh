<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Company;
use Livewire\Component;
use App\Models\PendingUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rules\Password;


class UserRegister extends Component
{
    public $step, $user, $roles, $company, $cookie_caducity, $locale, $package;
    public $name, $surname, $nif_nie, $birthdate, $email, $phone_number, $politics;
    public $business_name, $company_cif, $company_city, $company_postal_code, $company_email, $company_phone_number;
    public $username, $password, $password_confirmation;
    public $pending_user;

    public function mount()
    {
        $this->locale           = request()->locale ?? app()->getLocale();
        $this->step             = (Cookie::get('step'))? (int)Cookie::get('step') : 1;
        $this->user             = User::find(Cookie::get('ui')) ?? null;
        $this->company          = Company::find(Cookie::get('ci')) ?? null;
        $this->cookie_caducity  = 45300; // 1 month in minutes (and 1 day)

        app()->setLocale($this->locale);

        switch(request()->package) {
            case 'basic':
            case 'business':
            case 'excellence':
            case 'premium':
                $this->package          = (Cookie::get('package'))? Cookie::get('package') : request()->package;
            break;

            default:
                $this->package          = 'basic';
            break;
        }

        if( $this->user ) {
            $this->name         = $this->user->name;
            $this->surname      = $this->user->surname;
            $this->nif_nie      = $this->user->nif_nie;
            $this->birthdate    = $this->user->birthdate->format('d/m/Y');
            $this->email        = $this->user->email;
            $this->phone_number = $this->user->phone_number;
            $this->politics     = 'Y';
        } else {
            $this->step         = 1;
            Cookie::queue('step', $this->step, $this->cookie_caducity);
        }

        if( $this->company ) {
            $this->business_name        = $this->company->business_name;
            $this->company_cif          = $this->company->cif;
            $this->company_city         = $this->company->city;
            $this->company_postal_code  = $this->company->postal_code;
            $this->company_email        = $this->company->email;
            $this->company_phone_number = $this->company->phone_number;
        }


    }

    public function render()
    {
        return view('livewire.user.register');
    }

    public function updatedPackage()
    {
        Cookie::queue('package', $this->package, $this->cookie_caducity);
        $this->pending_user   = PendingUser::updateOrCreate(['email' => $this->email], ['package'=>$this->package]);
    }

    public function personalDataSend()
    {
        $rules                  = [
            'name'                      => 'required|min:3',
            'surname'                   => 'required|min:3',
            'nif_nie'                   => 'required',
            'birthdate'                 => 'required|date',

            'phone_number'              => 'required',
            'politics'                  => 'required',
        ];

        $rules['email']                 = 'required|string|email|max:50|unique:users';
        if( $this->user ){
            $rules['email']             = 'required|string|email|max:50|unique:users,id,' . $this->user->id;
        }

        $validatedData = $this->validate($rules);

        $user   = User::updateOrCreate(['email' => $this->email], $validatedData);
        $roles  = $user->getRoleNames();
        if( count($roles) === 0 ){
            $user->assignRole('admin');
        }
        $this->roles = count($user->getRoleNames());

        $this->step = 2;
        $this->user = $user;

        Cookie::queue('ui', $user->id, $this->cookie_caducity);
        Cookie::queue('step', $this->step, $this->cookie_caducity);

        // Create pending register for new user
        $this->pending_user   = PendingUser::updateOrCreate(['email' => $this->email], $validatedData);
        $this->pending_user->fill($validatedData);
        $this->pending_user->step = $this->step;
        $this->pending_user->package = $this->package;
        $this->pending_user->locale = $this->locale;
        $this->pending_user->save();
    }

    public function companyDataSend()
    {
        $this->validate([
            'business_name'             => 'required|string|min:3|max:100',
            'company_cif'               => 'required|min:3|max:20',
            'company_city'              => 'required|string|min:3|max:50',
            'company_postal_code'       => 'required|min:3|max:20',
            'company_email'             => 'required|string|email|max:50',
            'company_phone_number'      => 'required|min:3|max:50',
        ]);

        $company = Company::updateOrCreate(['cif' => $this->company_cif], [
            'business_name'             => $this->business_name,
            'cif'                       => $this->company_cif,
            'city'                      => $this->company_city,
            'postal_code'               => $this->company_postal_code,
            'email'                     => $this->company_email,
            'phone_number'              => $this->company_phone_number,
        ]);

        $this->user->company_id         = $company->id;
        $this->user->save();

        $this->step     = 3;
        $this->company  = $company;
        // package_id =

        Cookie::queue('ci', $company->id, $this->cookie_caducity);
        Cookie::queue('step', $this->step, $this->cookie_caducity);

        $this->pending_user = PendingUser::updateOrCreate(['email' => $this->email], ['step' => $this->step]);
        $this->pending_user->locale = $this->locale;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'password'                  => ['required', 'confirmed', Password::min(8)->uncompromised()
                                                                                     ->mixedCase()
                                                                                     ->letters()
                                                                                     ->numbers()
                                                                                     ->symbols()
                                                                                    ],
        ]);
    }

    public function accesDataSend()
    {
        $this->validate([
            'password'                  => ['required', 'confirmed', Password::min(8)->uncompromised()
                                                                                     ->mixedCase()
                                                                                     ->letters()
                                                                                     ->numbers()
                                                                                     ->symbols()
                                                                                    ],
        ]);

        $this->user->password = Hash::make($this->password);
        $this->user->save();

        $this->step = 4;
        Cookie::queue('step', $this->step, $this->cookie_caducity);
        $this->pending_user = PendingUser::updateOrCreate(['email' => $this->email], ['step' => $this->step, 'locale'=>$this->locale]);

        // Delete cookies
        Cookie::queue(Cookie::forget('ui'));
        Cookie::queue(Cookie::forget('ci'));
        Cookie::queue(Cookie::forget('step'));
        Cookie::queue(Cookie::forget('pack'));
    }
}
