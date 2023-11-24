<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $table= 'local';

    protected $fillable=[
        'operation',
        'service',
        'rank',
       'lname',
       'fname',
       'gender',
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
