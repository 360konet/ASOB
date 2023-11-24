<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLocal extends Model
{
    use HasFactory;

    protected $table='courselocal';

    protected $fillable=[
       'category',
      
       'personnel_id',
       'from',
       'to',
       'start_date',
       'end_date',
       'csename',
       'remarks'
    ];

    public function officer()
    {
        return $this->belongsTo(Officers::class, 'id', 'id');
    }
}
