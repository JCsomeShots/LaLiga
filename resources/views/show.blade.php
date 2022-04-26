@extends('layouts.layout')

@section('title', 'show')

@section('content')

        
<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            {{-- <tr class="p-2 items-center text-sm">
                <th class="txt py-3 pr-6 font-base pl-3 ">#</th>
                <th class="txt pl-3 font-base w-3/5 text-left">Equipo</th>
                <th class="txt py-3 pr-6 font-base w-3/5 text-left">Slogan</th>
                <th class="txt py-3 pr-6 font-base w-3/5 text-left">Antiguedad</th>
                <th class="txt py-3 px-6 font-base puntos">PT</th>
                <th class="txt py-3 px-6 font-base">PJ</th>
                <th class="txt py-3 px-6 font-base ">PG</th>
                <th class="txt py-3 px-6 font-base">PE</th>
                <th class="txt py-3 px-6 font-base">PP</th>
            </tr>
            <tr>
                <td class="txt py-3 pr-6 font-base pl-4 ">1</th>
                <td class="txt pl-3 font-base text-left equipo"><a href="/show"> Madrid</a></th>
                <td class="txt py-3 font-base text-left">'Hala Madrid'</th>
                <td class="txt py-3 pr-6 font-base text-left">'más de 10 años'</th>
                <td class="txt py-3 pr-6 pl-8 font-base puntos">3</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">1</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">1</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">0</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">0</th>
            </tr> --}}
            <tr>
                <td class="txt py-3 font-base pl-4 ">Equipo</th>
                <td class="txt pl-3 font-base text-left equipo">Real Madrid</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Slogan</th>
                    <td class="txt pl-3 font-base text-left equipo">'Hala Madrid'</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Antiguedad</th>
                    <td class="txt pl-3 font-base text-left equipo">'más de 10 años'</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Puesto en la clasificación</th>
                <td class="txt pl-3 font-base text-left equipo"> # 1</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Puntos</th>
                <td class="txt pl-3 font-base text-left equipo">3</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos jugados</th>
                <td class="txt pl-3 font-base text-left equipo">1</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos ganados</th>
                <td class="txt pl-3 font-base text-left equipo">1</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos empatados</th>
                <td class="txt pl-3 font-base text-left equipo">0</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Partidos perdidos</th>
                <td class="txt pl-3 font-base text-left equipo">0</th>
            </tr>
           
        </table>
    </div>
    <div class="txt flex justify-center mt-2">
        <p class="text-xs mr-3"><small>Si quieres dar de baja a un equipo</small></p>
        <a href="/delete" class="txt pincha align-text-bottom mr-2 flex items-end">
            <small>pincha aquí</small>
            <figure>
                <img src="{{ asset('img/pelotaNaranja.png') }}" alt="pelotaDiseny" class="w-4 pelota ml-2 ease-in-out">
            </figure>
        </a>
        <p class="text-xs mr-3"><small>... por qué te vas?</small></p>
    </div>
    
</section>
@endsection


