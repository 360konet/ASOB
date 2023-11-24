<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    use HasFactory;

    protected $table="deployment";

    protected $fillable=[
        'service',
        'rank',
       'lname',
       'fname',
       'gender',
        'catgory',
        'posted_from',
        'posted_to',
        'posted_date',
        'appointment',
        'remarks'
    ];
}
