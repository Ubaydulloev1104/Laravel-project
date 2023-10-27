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
        $locations = Location::all();
        $jobTypes = JobType::all();
        $companies = Company::all();

        return view('new-post', [
            'locations' => $locations, 
            'types'     => $jobTypes, 
            'companies' => $companies
        ]);
    }

    public function create(Request $request){
        Job::create($request->all());
        
        return redirect('/');
    }
}
