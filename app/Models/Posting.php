<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $table="posting";

    protected $fillable=[
        'type',
        'category',
        'personnel_id',
        'posted_from',
        'posted_to',
        'posted_date',
        'arrival_date',
        'appointment',
        'remarks'
    ];
}
