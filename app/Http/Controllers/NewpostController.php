<?php

namespace App\Http\Controllers;
use App\Models\Jods;
use App\Models\Lacation;
use App\Models\Jobtupe;
use App\Models\Company;
use Illuminate\Http\Request;

class NewpostController extends Controller
{
    public function newpost(){

        $lacations=lacation::all();
        $jobTypes=jobType::all();
        $Companys=Company::all();

        return view('new-post',[
            'lacations'=>$lacations,
            'jobTypes'=>$jobTypes,
            'Companys'=>$Companys,
        ]);
    }
}
