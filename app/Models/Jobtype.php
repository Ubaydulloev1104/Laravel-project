<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    use HasFactory;
    public $tabil="jobtype";
      public function job()
    {
        return $this->belongsTo(Job::class, 'type_id');
    }

}
