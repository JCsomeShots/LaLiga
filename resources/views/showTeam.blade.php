@extends('layouts.layout')

@section('title', 'organization')

@section('content')

 
<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen  mx-auto text-slate-50 mt-12 mx-10 min-w-min max-w-5xl text-sm rounded-xl">
            <tr>
                <td class="txt pb-6 font-base pr-4 pl-6 pt-6 ">Equipo</th>
                <td class="txt pt-6 pl-3 pr-3 pb-6 font-base text-left">{{$team->name}}</th>
            </tr>
            <tr>
                <td class="txt pl-6 font-base px-4 pb-4">Slogan</th>
                    <td class="txt pb-4 pl-3 font-base text-left">{{$team->slogan}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base px-4 pl-6">Entidad deportiva</th>
                    <td class="txt pl-3 font-base text-left">{{$team->club}}</th>
            </tr>
            <tr>
                <td class="txt pl-6 py-3 font-base px-4 ">Antiguedad</th>
                    <td class="txt pl-3 font-base text-left">{{$team->creation}}</th>
            </tr>
           
            <tr>
                <td class="text-sm txt pb-6 pt-3 font-base pr-4 pl-6 ">Modificar</th>
                        <td class="txt py-3 pl-2 pb-6 font-light cursor-pointer hover:text-yellow-900"><a class="fa fa-cogs" href="{{route('teamEdit' , $team)}}"></a></td>
            </tr>
           
        </table>
    </div>
    <div class="blanco flex justify-center mt-2">
        <p class="text-xs mr-3"><small>Si quieres dar de baja a este equipo</small></p>
        <div class="pincha">

            <form action="{{route('destroyTeam' , $team)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="txt py-3 mr-2 font-light cursor-pointer hover:text-yellow-900">
                    <p class="pincha blanco ">pincha aquí &nbsp; <i class="fa fa-trash-o" style=" font-size:18px;"></i>&nbsp;</p>

                </button>


            </form>
        </div>
        
        <p class="text-xs mr-3"><small>&nbsp;&nbsp;&nbsp;&nbsp;... por qué te vas? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small></p>
    </div>
    
    
</section>

@endsection


