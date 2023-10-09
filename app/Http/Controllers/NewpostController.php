<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewpostController extends Controller
{
    public function newpost(){

        return view('new-post');
    }
}
