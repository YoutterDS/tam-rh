<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preregister extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'email', 'phone', 'politics'];
}
