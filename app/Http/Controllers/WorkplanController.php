<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\User;

class WorkplanController extends Controller
{
    

    public function index(){

       

        $activities = Activity::all();
    	
        return view('arbeitszeiten', compact('activities'));
    }
}
