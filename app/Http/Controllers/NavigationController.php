<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class NavigationController extends Controller
{


    public function clasification(){
        $teams = Team::all();
        return view('clasification', compact('teams'));
    }

    public function register(){
        $teams = Team::all();
        return view('register', compact('teams'));
    }

    public function calendar(){
        $teams = Team::all();
        return view('calendar', compact('teams'));
    }
   
    public function result(){
        $teams = Team::all();
        return view('result', compact('teams'));
    }
    
    public function show(){
        $teams = Team::all();
        return view('show', compact('teams'));
    }

    public function delete(){
        $teams = Team::paginate();
        //return $teams;
        return view('delete', compact('teams'));
    }
}
