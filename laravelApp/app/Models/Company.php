<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'business_name',
        'cif',
        'city',
        'postal_code',
        'email',
        'phone_number',
    ];

    // Relationships
    public function country()
    {
        return $this->hasOne(Country::class);
    }
}
