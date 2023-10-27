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

    protected $fillable = ['title', 'salary', 'type_id', 'location_id', 'description', 'company_id'];

    public $table = 'job';

    public function types()
    {
        return $this->hasMany(JobType::class, 'id', 'type_id');
    }

    public function companies()
    {
        return $this->hasMany(Company::class, 'id', 'company_id');
    }

    public function locations()
    {
        return $this->hasMany(Location::class, 'id', 'location_id)');
    }
}
