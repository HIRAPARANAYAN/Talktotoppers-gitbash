<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'type',
        'phonenumber',
        'two_factor_code',
        'two_factor_expires_at',
        'two_factor_code_mail',
    ];
}
