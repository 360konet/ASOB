<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    use HasFactory;

    protected $table= 'operations';

    protected $fillable=[
       'service',
       'rank',
       'lname',
       'fname',
       'gender',
       'operation',
       'location',
       'departure_date',
       'arrival_date',
       'appointment',
       'remarks'
    ];

    public function officer()
    {
        return $this->belongsTo(Officers::class, 'service', 'service');
    }

}
