<?php

namespace App;

use Auth;
use App\Marca;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
        'nif', 'phone', 'postal_address', 'postal_code', 'country_id', 'provincia_id', 'municipio_id',
        'birthday', 'gender_id', 'professional_category',
        'last_login_at', 'ip',
        'active',
        'qualification', 'exclusions',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday'          => 'datatime:Y-m-d H:i:s',
    ];
     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'birthday',
    ];

    public function municipio()
    {
        return $this->belongsTo('\App\Municipio');
    }

    public function provincia()
    {
        return $this->belongsTo('\App\Provincia');
    }

    public function country()
    {
        return $this->belongsTo('\App\Country');
    }

    public function getProfile()
    {
        $role = $this->userIs()->type;
        switch( $role ) {
            case 'MB':
                $profile = [];
            break;
            case 'MA':
                $profile = Marca::where('user_id', $this->id)->get()->first();
            break;
            case 'LO':
                $profile = Local::where('user_id', $this->id)->get()->first();
            break;
            case 'CA':
                $profile = Cadena::where('user_id', $this->id)->get()->first();
            break;
            case 'GR':
                $profile = Grupo::where('user_id', $this->id)->get()->first();
            break;
        };

        return $profile;
    }

    public function userIs()
    {
        return Auth::user()->roles()->first();
    }

    public function roles()
    {
        return $this->belongsToMany('\App\Role');
    }

    public function permissions()
    {
        return $this->belongsToMany('\App\Permission');
    }

    public function exclusions()
    {
        return $this->belongsToMany('\App\Exclusion'); //->orderBy('start_in_locals_at');
    }

    public function qualification()
    {
        return $this->belongsTo('\App\Qualification');
    }

    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->surname}";
    }

    // 08/09/2019 - 10:44:01
    public function getLastLoginAtAttribute()
    {
        if( $this->attributes['last_login_at'] !== null ) {
            return Carbon::parse($this->attributes['last_login_at'])->format('d/m/Y - H:i:s');
        } else {
            return null;
        }
    }

    public function getDiffLastLoginAtAttribute()
    {
        if( $this->attributes['last_login_at'] !== null ) {
            $date = Carbon::parse($this->attributes['last_login_at']);
            return Carbon::parse($date)->diffForHumans();
        } else {
            return null;
        }
    }

    public function getCountryCodeAttribute()
    {
        if( $this->contry_id ){
            return $this->country->code;
        }
    }

    public function getBirthdayAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    // Setters
    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday']    = Carbon::parse(str_replace("/","-", $value))->format('Y-m-d H:i:s');
    }

    public function sendPasswordResetNotification($token)
    {
        $data = [
            $this->email
        ];

        Mail::send('emails.reset-password', [
            'fullname'      => $this->fullname,
            'reset_url'     => route('password.reset', ['token' => $token, 'email' => $this->email]),
        ], function($message) use($data){
            $message->from('robot@marbel.com');
            $message->subject('Restitución de contraseña MARBEL');
            $message->to($data[0]);
        });
    }
}
