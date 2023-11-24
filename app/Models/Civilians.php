<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civilians extends Model
{
    use HasFactory;

    protected $table='civilians';

    protected $fillable=[
        'image',
        'service',
        'rank',
        'lname',
        'fname',
        'nationality',
        'dob',
        'blood',
        'hometown',
        'region',
        'marital',
        'spouse',
        'sphone',
        'kin',
        'un',
        'relation',
        'kphone',
        'employment',
        'promotion',
        'phone',
        'remarks',
        'Gender',
        'course',
    ];
}
