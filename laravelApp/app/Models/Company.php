<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Rinvex\Subscriptions\Traits\HasSubscriptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    use Notifiable;
    use HasSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name',
        'business_name',
        'cif',
        'address',
        'secondary_address',
        'city',
        'postal_code',
        'state_province_region',
        'country_id',
        'phone_number',
        'fax_number',
        'email',
        'locale_id',
        'coin_format_id',
        'coin_id',
    ];

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public function coinFormat()
    {
        return $this->belongsTo(CoinFormat::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function billingType()
    {
        return $this->belongsTo(BillingType::class);
    }

    public function banks()
    {
        return $this->hasMany(Bank::class);
    }

    public function creditCards()
    {
        return $this->hasMany(CreditCard::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }
}
