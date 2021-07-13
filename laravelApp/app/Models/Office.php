<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['headquarters', 'name', 'hours', 'address', 'city', 'postal_code', 'state_province_region', 'phone_number', 'email', 'country_id', 'company_id'];

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
