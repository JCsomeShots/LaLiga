<?php

namespace App\Http\Controllers;

use App\Models\Partidos;
use App\Models\Team;
use Illuminate\Http\Request;

class NavigationController extends Controller
{


    public function clasification(){
        $teams = Team::all()->sortBy('id');
        return view('clasification', compact('teams'));
    }

    public function register(){
        $teams = Team::all();
        return view('register', compact('teams'));
    }

    public function calendar(){
        $partidos = Partidos::all();
        return view('calendar', compact('partidos'));
    }
   
    public function result(){

    }
    public function showPartido($id){
        $partido = Partidos::find($id);
        return view('showPartido', compact('partido'));
    }
    public function showTeam($id){
        $team = Team::find($id);
        return view('showTeam', compact('team'));
    }

    public function organization(){
        $teams = Team::all();
        return view('organization', compact('teams'));
    }

    public function delete(Team $team){
        // $teams = Team::all();
        // return $teams;
        // return view('delete', compact('teams'));

    }

    public function store(Request $request){
        // return $request->all();
        $team = new Team();
        $team->name = $request->name;
        $team->slogan = $request->slogan;
        $team->creation = $request->creation;
        //return $team;
        $team->save();
        return redirect()->route('showTeam', $team->id);
    }
    public function organizationStore(Request $request){
        //return $request->all();
        if($request->nameLocal == $request->nameVisitor){
            return redirect()->route('mismoEquipo');
        }
        $partido = new Partidos();
        $partido->nameLocal = $request->nameLocal;
        $partido->nameVisitor = $request->nameVisitor;
        $partido->status = $request->status;
        $partido->fecha = $request->fecha;
         $partido->save();
        // return $partido;
        return redirect()->route('calendar', $partido->id);
    }

    public function mismoEquipo(){
        return view('mismoEquipo');
    }

    public function partidosEdit( Partidos $partidos){
        // $partido = Partidos::find($id);
        // return $partido;
        return view('partidoEdit', compact('partidos'));
    }
    
    public function teamEdit(Team $team){
        return view('teamEdit', compact('team'));
    }

    public function updateTeam(Request $request ,Team $team){
        // return $request->all();
        $team->name = $request->name;
        $team->slogan = $request->slogan;
        $team->creation = $request->creation;
        // return $team;
        $team->save();
        return redirect()->route('showTeam', $team->id);
    }
    public function updatePartido(Request $request ,Partidos $partidos){
        // return $partidos;
        return $request->all();
    }

}