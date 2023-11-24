<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOver extends Model
{
    use HasFactory;

    protected $table='courseover';

    protected $fillable=[
       'category',
       'rank',
       'lname',
       'fname',
       'gender',
       'service',
       'from',
       'to',
       'start_date',
       'end_date',
       'course',
       'remarks'
    ];

    public function officer()
    {
        return $this->belongsTo(Officers::class, 'service', 'service');
    }
}
