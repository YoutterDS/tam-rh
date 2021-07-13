<?php

namespace App\Models;


use App\Traits\Encryptable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;
    use Encryptable;

    protected $encryptable = ['cc', 'iban'];
    protected $casts = [
        'is_dirty' => 'array'
    ];
}
