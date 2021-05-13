<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\View\View;
use App\Models\Preregister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;

class PreregisterController extends Controller
{
    public function index(Request $request): view
    {
        if($request->locale) {
            app()->setLocale($request->locale);
        }
        return view('preregister.index');
    }

    public function registerSave(Request $request)
    {
        $rules = array(
            'fullname'               => 'required',
            'email'                  => 'required|email|unique:preregisters',
            'phone'                  => 'required',
            'politics'               => 'required',
        );
        $messsages = array(
            'fullname.required'      => 'Nombre es obligado',
            'email.required'         => 'E-mail es obligado',
            'email.unique'           => 'Este email ya está registrado',
            'phone.required'         => 'Teléfono es obligado',
            'politics.required'      => 'Política de privacidad y Cookies son obligadas',
        );
        $validator = Validator::make($request->all(), $rules, $messsages);
        if ( $validator->fails() ) {
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $preregister = new Preregister;
        $preregister->fill($request->all());
        $preregister->ip_address = $request->ip();

        if( $preregister->save() ) {
            return Redirect::back()->withInput()->with(['success'=>Lang::get('preregister.mssg-ok')]);
        } else {
            return Redirect::back()->withInput()->withErrors(['errors'=>Lang::get('preregister.mssg-ko')]);
        }
    }

    public function legal(): View
    {
        return view('preregister.legal');
    }

    public function cookies(): View
    {
        return view('preregister.cookies');
    }
}
