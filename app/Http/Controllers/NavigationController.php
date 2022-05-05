<?php

namespace App\Http\Controllers;

use App\Models\Partidos;
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
        // $teams = Team::all();
        // return view('calendar', compact('teams'));
        $partidos = Partidos::all();
        // return $partido;
        return view('calendar', compact('partidos'));
    }
   
    public function result(){
        // $partido = Partidos::find($id);
        $partidos = Partidos::all();
        return view('calendar', compact('partido'));
        // return $partido;
    }
    
    // public function show($id){
    //     $team = Team::find($id);
    //     return view('show', compact('team'));
    // }
    public function show2($id){
        $team = Team::find($id);
        return view('show2', compact('team'));
    }

    public function organization(){
        $teams = Team::all();
        return view('organization', compact('teams'));
    }

    public function delete(){
        $teams = Team::all();
        //return $teams;
        return view('delete', compact('teams'));
    }

    public function store(Request $request){
        // return $request->all();
        $team = new Team();
        $team->name = $request->name;
        $team->slogan = $request->slogan;
        $team->creation = $request->creation;
        //return $team;
        $team->save();
        return redirect()->route('show2', $team->id);
    }
    public function organizationStore(Request $request){
        //return $request->all();
        $partido = new Partidos();

        $partido->nameLocal_id = $request->nameLocal;
        $partido->nameVisitor_id = $request->nameVisitor;
        $partido->status = $request->status;
        $partido->fecha = $request->fecha;
         $partido->save();
        // return $partido;
        return redirect()->route('calendar', $partido->id);


    }


}