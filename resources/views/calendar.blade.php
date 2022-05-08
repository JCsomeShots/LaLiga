@extends('layouts.layout')

@section('title', 'Calendar')

@section('content')

<section class="laTabla">

    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs mb-4">
            <tr class="p-2 items-center text-sm">
                <th class="txt py-3 pr-6 font-base pl-3 ">#</th>
                <th class="txt py-3 pr-6 font-base  text-left">Equipo Local</th>
                <th class="txt py-3 font-base  text-left">Equipo visitante</th>
                <th class="text-left txt py-3 px-6 font-base puntos">Status del Partido</th>
                <th class="text-left txt py-3 px-6 font-base puntos">Fecha del Partido</th>
                <th class="text-left txt py-3 px-6 font-base puntos">Hora del Partido</th>
                <th class="text-left txt py-3 px-6 font-base puntos">Dale un zoom</th>
               
            </tr>
            
            @foreach ($partidos as $partido)
            <tr>
                <td class="txt py-3 pr-6 font-thin pl-4 ">{{$partido->id}}</td>
                <td class="txt py-3 pr-6 font-light text-left"> {{$partido->nameLocal}}</td>
                <td class="txt py-3 pr-6 font-light text-left"> {{$partido->nameVisitor}}</td>

                <td class="txt py-3 px-6 font-light text-left"> {{$partido->status}}</td>
                <td class="txt py-3 px-6 pr-3 font-light text-left"> {{$partido->fecha}}</td>
                <td class="txt py-3 px-6 pr-3 font-light text-left"> {{$partido->hora}}</td>
                <td class="txt py-3 px-6 pl-10 font-light cursor-pointer hover:text-yellow-900"><a href="{{route('showPartido',$partido->id)}}" class="fa fa-search"></a></td>
                
            </tr>

            @endforeach
        </table>


        </section>
@endsection

