<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lacation;
use App\Models\Jobtupe;
use App\Models\Company;

class Jobs extends Model
{
    use HasFactory;
    public $tabil="jobs";
    public function types()
    {
        return $this->hasMany(JobType::class,'id','type_id');
    }
    public function companys()
    {
        return $this->hasMany(JobType::class,'id','company_id');
    }
    public function lacations()
    {
        return $this->hasMany(JobType::class,'id','location_id');
    }
}
