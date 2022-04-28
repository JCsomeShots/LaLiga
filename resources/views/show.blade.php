@extends('layouts.layout')

@section('title', 'show '.$team->name)

@section('content')

<h3>Bienvenido al curso : {{$team->name}}</h3>
   <h3>slogan : {{$team->slogan}}</h3>
   <h3>creación : {{$team->creation}}</h3>
        
<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr>
                <td class="txt py-3 font-base pl-4 ">Equipo</th>
                <td class="txt pl-3 font-base text-left">{{$team->name}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Slogan</th>
                    <td class="txt pl-3 font-base text-left">{{$team->slogan}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Antiguedad</th>
                    <td class="txt pl-3 font-base text-left">{{$team->creation}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Puesto en la clasificación</th>
                <td class="txt pl-3 font-base text-left"> # 1</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Puntos</th>
                <td class="txt pl-3 font-base text-left">3</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos jugados</th>
                <td class="txt pl-3 font-base text-left">1</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos ganados</th>
                <td class="txt pl-3 font-base text-left">1</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos empatados</th>
                <td class="txt pl-3 font-base text-left">0</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos perdidos</th>
                <td class="txt pl-3 font-base text-left">0</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Goles a favor</th>
                <td class="txt pl-3 font-base text-left">0</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Goles en contra</th>
                <td class="txt pl-3 font-base text-left">0</th>
            </tr>
           
        </table>
    </div>
    <div class="txt flex justify-center mt-2">
        <p class="text-xs mr-3"><small>Si quieres dar de baja a un equipo</small></p>
        <a href="{{route('delete')}}" class="txt pincha align-text-bottom mr-2 flex items-end">
            <small>pincha aquí</small>
            <figure>
                <img src="{{ asset('img/pelotaNaranja.png') }}" alt="pelotaDiseny" class="w-4 pelota ml-2 ease-in-out">
            </figure>
        </a>
        <p class="text-xs mr-3"><small>... por qué te vas?</small></p>
    </div>
    
</section>
@endsection


