<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaibility extends Model
{
    use HasFactory;
    protected $fillable = [
        'toper_id',
        'start_time',
        'end_time',
        'date',
        'availability',
    ];
}
