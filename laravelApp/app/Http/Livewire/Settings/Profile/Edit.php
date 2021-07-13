<?php

namespace App\Http\Livewire\Settings\Profile;

use Swift;
use Carbon\Carbon;
use App\Models\Bank;
use App\Models\User;
use App\Models\Company;
use Livewire\Component;
use App\Models\CreditCard;
use App\Models\BillingType;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class Edit extends Component
{
    public $userCanEdit;
    public $dirty;
    public bool $canBeSubmitted = false;
    public $isSaved = false;

    public $company;
    public $name, $business_name, $cif, $address, $secondary_address, $city, $postal_code, $state_province_region, $country_id;
    public $phone_number, $fax_number, $email;
    public $locale_id, $coin_format_id, $coin_id;
    public $billing_type, $billing_recurrency_id;

    public $credit_card, $credit_card_caducity;

    public $bank_cc_default = '0000000000000000000000', $bank_iban_default = 'XX0000000000000000000000';
    public $bank, $bank_name, $bank_cc, $bank_iban, $decript_action_iban = 'show', $eye_iban = '-slash', $decript_action_cc = 'show', $eye_cc = '-slash', $is_validated_password = false;

    protected function rules()
    {
        return [
            'name'              => 'required',
            'business_name'     => 'required',
            'cif'               => 'required|min:6',
            'address'           => 'required',
            'email'             => 'required|string|email|max:50|unique:companies,id,' . Auth()->user()->id,
            'bank_name'         => 'required_if:billing_type,DB',
            'bank_cc'           => 'required_if:billing_type,DB',
            'bank_iban'         => 'required_if:billing_type,DB'
        ];
    }

    public function mount()
    {
        $this->userCanEdit              = User::find(auth()->user()->id)->hasRole(['super-admin', 'admin']);

        $this->successful               = false;
        $this->company                  = Company::find(auth()->user()->company->id);
        $this->dirty                    = $this->company->getDirty();

        $this->name                     = $this->company->name;
        $this->business_name            = $this->company->business_name;
        $this->cif                      = $this->company->cif;
        $this->address                  = $this->company->address;
        $this->secondary_address        = $this->company->secondary_address;
        $this->city                     = $this->company->city;
        $this->postal_code              = $this->company->postal_code;
        $this->state_province_region    = $this->company->state_province_region;
        $this->country_id               = $this->company->country_id;

        $this->phone_number             = $this->company->phone_number;
        $this->fax_number               = $this->company->fax_number;
        $this->email                    = $this->company->email;

        $this->locale_id                = $this->company->locale_id;
        $this->coin_format_id           = $this->company->coin_format_id;
        $this->coin_id                  = $this->company->coin_id;

        if( $this->company->billingType ){
            $this->billing_type         = $this->company->billingType->code;
        }

        $this->credit_card              = $this->company->creditCards()->first();
        if( $this->credit_card ) {
            $this->credit_card_caducity = $this->credit_card->caducity->format('m/y');
        }

        $this->bank                     = ($this->company->banks()->count() > 0)? $this->company->banks()->first() : new Bank();
        $this->bank_name                = $this->bank->name;
        $this->bank_cc                  = ($this->bank->cc)? $this->bank_cc_default : null;
        $this->bank_iban                = ($this->bank->iban)? $this->bank_iban_default : null;
    }

    public function formHasChanged()
    {
        $this->canBeSubmitted = true;
        $this->isSaved = false;
    }

    public function render()
    {
        return view('livewire.settings.profile.edit');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        if( $this->userCanEdit ) {
            $this->validate();

            $this->company->name                    = $this->name;
            $this->company->business_name           = $this->business_name;
            $this->company->cif                     = $this->cif;
            $this->company->address                 = $this->address;
            $this->company->secondary_address       = $this->secondary_address;
            $this->company->city                    = $this->city;
            $this->company->postal_code             = $this->postal_code;
            $this->company->state_province_region   = $this->state_province_region;
            $this->company->country_id              = $this->country_id;
            $this->company->phone_number            = $this->phone_number;
            $this->company->fax_number              = $this->fax_number;
            $this->company->email                   = $this->email;
            $this->company->locale_id               = $this->locale_id;
            $this->company->coin_format_id          = $this->coin_format_id;
            $this->company->coin_id                 = $this->coin_id;


            $billingTypeUpdated                     = BillingType::where('code', $this->billing_type)->get()->first();
            $this->company->billing_type_id         = $billingTypeUpdated->id;

            $bankGetDirty = [];
            if( $this->billing_type ){


                switch( $this->billing_type ) {
                    case 'DB':
                        $this->bank->company_id     = $this->company->id;
                        $this->bank->name           = $this->bank_name;
                        if( $this->bank_cc != $this->bank_cc_default && $this->bank_cc !== '' ) {
                            $this->bank->cc         = $this->bank_cc;
                        }
                        if( $this->bank_iban != $this->bank_iban_default && $this->bank_iban !== '' ) {
                            $this->bank->iban       = $this->bank_iban;
                        }

                        // Creación de array con los campos modificados de la entidad bancaria
                        if( $this->bank ) {
                            foreach( $this->bank->getDirty() as $key=>$value ) {
                                array_push($bankGetDirty, ['name'=>$key, 'value'=>$value]);
                            }
                            $this->bank->is_dirty = $bankGetDirty;
                        }

                    break;

                    case 'TC':
                        //
                    break;
                }

            }

            if ( $this->company->isDirty() or count($bankGetDirty) > 0 ){
                $this->company->billingType()->associate($billingTypeUpdated)->save();
                $this->company->save();
                $this->company->banks()->save($this->bank);
                $this->bank->touch();

                $this->canBeSubmitted = false;
                $this->isSaved = true;

                $this->emit('successful');
                $this->hiddeValues('cc');
                $this->hiddeValues('iban');
            } else {
                $this->emit('nothing-updated');
            }
        } else {
            $this->emit('user-cannot-edit');
        }
    }

    // Banks
    public function decryptEncrypt( String $value )
    {
        if( !$this->is_validated_password ) {
            $this->emit('decrypt-encrypt', $value);
            return false;
        }

        $this->validatePassword(null, $value);
    }

    public function validatePassword($password, $value)
    {
        if( $password && !Hash::check($password, auth()->user()->password) ) {
            $this->emit('validate-password', false, $value);
            return false;
        }

        switch($value) {
            case 'cc':
                if( $this->decript_action_cc === 'show' ) {
                    $this->decryptCC();
                } else {
                    $this->hiddeValues($value);
                }
            break;

            case 'iban':
                if( $this->decript_action_iban === 'show' ) {
                    $this->decryptDB();
                } else {
                    $this->hiddeValues($value);
                }
            break;
        }

        $this->is_validated_password = true;
        $this->emit('validate-password', true, $value);

        return false;
    }

    public function hiddeValues( String $value )
    {
        switch($value) {
            case 'cc':
                $this->bank_cc = "0000000000000000000000";
                $this->eye_cc = '-slash';
                $this->decript_action_cc = 'show';
            break;

            case 'iban':
                $this->bank_iban = 'XX0000000000000000000000';
                $this->eye_iban = '-slash';
                $this->decript_action_iban = 'show';
            break;
        }
    }

    public function decryptCC()
    {
        $this->bank_cc =  $this->company->banks()->first()->cc;
        $this->eye_cc = '';
        $this->decript_action_cc = 'hidde' ?? 'show';
    }

    public function decryptDB()
    {
        $this->bank_iban = $this->company->banks()->first()->iban;
        $this->eye_iban = '';
        $this->decript_action_iban= 'hidde' ?? 'show';
    }

    // Credit Cards
    // TODO: Hace falta integrar el TPVV para realizar un primer pago de 0€ que verificará que la tarjeta es real, y recibir el token que permite la recurrencia de cobros
    public function addCreditCard()
    {
        $creditCard = $this->credit_card ?? new CreditCard();
        $creditCard->company_id = $this->company->id;
        $creditCard->caducity   = Carbon::now();
        $creditCard->save();

        $this->credit_card = $creditCard;
        $this->credit_card_caducity = $creditCard->caducity->format('m/y');

        $this->emit('credit-card-updated');
    }


}
