@extends('layouts.layout')

@section('title', 'organization')

@section('content')

 
<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr>
                <td class="txt py-3 font-base px-4 ">Equipo</th>
                <td class="txt pl-3 font-base text-left">{{$team->name}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base px-4 ">Slogan</th>
                    <td class="txt pl-3 font-base text-left">{{$team->slogan}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base px-4 ">Antiguedad</th>
                    <td class="txt pl-3 font-base text-left">{{$team->creation}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base px-4 ">Modificar</th>
                        <td class="txt py-3 pl-3 font-light cursor-pointer hover:text-yellow-900"><a class="fa fa-cogs" href="{{route('teamEdit' , $team)}}"></a></td>
            </tr>
           
        </table>
    </div>
    <div class="blanco flex justify-center mt-2">
        <p class="text-xs mr-3"><small>Si quieres dar de baja a un equipo</small></p>
        <a href="{{route('delete')}}" class="blanco pincha align-text-bottom mr-2 flex items-end">
            <small>pincha aquí</small>
            <figure>
                <img src="{{ asset('img/pelotaNaranja.png') }}" alt="pelotaDiseny" class="w-4 pelota ml-2 ease-in-out blanco rounded-full">
            </figure>
        </a>
        <p class="text-xs mr-3"><small>... por qué te vas?</small></p>
    </div>
    
    
</section>

@endsection


