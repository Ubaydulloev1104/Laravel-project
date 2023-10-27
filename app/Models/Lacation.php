<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lacation extends Model
{
    use HasFactory;
    public $tabil="lacation";
     public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
