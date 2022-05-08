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

    public function store(Request $request){
        // return $request->all();

        $request->validate([
            'name' => 'required',
            'slogan' => 'required',
            'creation' => 'required',
            'club' => 'required'
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->slogan = $request->slogan;
        $team->creation = $request->creation;
        $team->club = $request->club;
        //return $team;
        $team->save();
        return redirect()->route('showTeam', $team->id);
    }
    public function organizationStore(Request $request){
        //return $request->all();
        if($request->nameLocal == $request->nameVisitor){
            return redirect()->route('mismoEquipo');
        }
        
        $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
        ]);

        $partido = new Partidos();
        $partido->nameLocal = $request->nameLocal;
        $partido->nameVisitor = $request->nameVisitor;
        $partido->status = $request->status;
        $partido->fecha = $request->fecha;
        $partido->hora = $request->hora;
        $partido->save();
        // return $partido;
        return redirect()->route('calendar', $partido->id);
    }

    public function mismoEquipo(){
        return view('mismoEquipo');
    }

    public function partidosEdit( Partidos $partido){
        // $partido = Partidos::find($id);
        // return $partido;
        return view('partidoEdit', compact('partido'));
    }
    
    public function teamEdit(Team $team){
        return view('teamEdit', compact('team'));
    }

    public function updateTeam(Request $request ,Team $team){
        // return $request->all();

        $request->validate([
            'name' => 'required',
            'slogan' => 'required',
            'creation' => 'required',
            'club' => 'required'
        ]);

        $team->name = $request->name;
        $team->slogan = $request->slogan;
        $team->creation = $request->creation;
        $team->club = $request->club;
        // return $team;
        $team->save();
        return redirect()->route('showTeam', $team->id);
    }
    public function updatePartido(Request $request ,Partidos $partido){
        //  return $request->all();

        $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
        ]);

        $partido->nameLocal = $request->nameLocal;
        $partido->nameVisitor = $request->nameVisitor;
        $partido->status = $request->status;
        $partido->fecha = $request->fecha;
        $partido->hora = $request->hora;
        //return $partidos;
        $partido->save();
        return redirect()->route('calendar', $partido->id);
        
    }

    public function destroyPartido (Partidos $partido){ 
        $partido->delete();
        return redirect()->route('calendar', $partido->id);
    }
    
    public function destroyTeam (Team $team){ 
        $team->delete();
        return redirect()->route('clasification');
    }

}