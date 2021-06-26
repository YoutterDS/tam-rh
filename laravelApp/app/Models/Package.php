<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // Relationships
    public function options()
    {
        return $this->hasMany(PackageOptions::class);
    }

    // Mutator
    public function getNameAttribute()
    {
        return $this['name_' . app()->getLocale()];
    }

    public function getPriceFormattedAttribute()
    {
        return number_format($this->price, 2, ',', '.');
    }
}
