<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranks extends Model
{
    use HasFactory;

    protected $table='ranks';

    protected $fillable=[
        'image',
        'service',
        'rank',
        'lname',
        'fname',
        'arm',
        'nationality',
        'dob',
        'blood',
        'hometown',
        'region',
        'un',
        'military',
        'marital',
        'spouse',
        'sphone',
        'kin',
        'relation',
        'kphone',
        'passout',
        'promotion',
        'exercise',
        'phone',
        'remarks',

    ];
}
