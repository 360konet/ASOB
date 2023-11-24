<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officers extends Model
{
    use HasFactory;

    protected $table='officers';

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
        'commission',
        'promotion',
        'phone',
        'status',
        'remarks',

    ];

    public function operation()
    {
        return $this->hasOne(Operations::class, 'service', 'service');
    }
}
