<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $tabil="company";
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
