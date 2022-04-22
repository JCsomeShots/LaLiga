<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function clasification(){
        return view('clasification');
    }

    public function register(){
        return view('register');
    }

    public function calendar(){
        return view('calendar');
    }
   
    public function result(){
        return view('result');
    }
    
    public function show(){
        return view('show');
    }

    public function delete(){
        return view('delete');
    }
}
