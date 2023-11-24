<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table='leave';

    protected $fillable=[
        'category',
        'service',
        'rank',
        'type',
        'reason',
        'lname',
        'fname',
        'gender',
        'start_date',
        'end_date',
        'approval',
        'remarks'
    ];
}
