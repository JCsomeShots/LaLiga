@extends('layouts.layout')

@section('title', 'Calendar')

@section('content')

<section class="laTabla">

    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla rounded-xl rounded-r-xl  w-screen mx-auto text-slate-50 mt-14 mx-10 min-w-min max-w-5xl text-xs mb-4">
            <tr class="p-2 items-center text-sm">
                <th class="txt pb-3 pt-6 pr-6 pl-6 font-base">#</th>
                <th class="txt pb-3 pt-6 pr-6 font-base  text-left">Equipo Local</th>
                <th class="txt pb-3 pt-6 font-base  text-left">Equipo visitante</th>
                <th class="text-left txt pb-3 pt-6 pl-2 pr-6 font-base puntos">Status </th>
                <th class="text-left txt pb-3 pt-6 px-6 font-base puntos">Fecha </th>
                <th class="text-left txt pb-3 pt-6 px-6 font-base puntos">Hora </th>
                <th class="text-left txt pb-3 pt-6 pl-3 pr-6 font-base puntos">Modificar</th>
               
            </tr>
            
            @foreach ($partidos as $partido)
            <tr>
                <td class="txt py-3 pr-6 font-thin pl-4  text-sm">{{$partido->id}}</td>
                <td class="txt py-3 pr-6 font-light text-left text-sm"> {{$partido->nameLocal}}</td>
                <td class="txt py-3 pr-6 font-light text-left text-sm"> {{$partido->nameVisitor}}</td>

                <td class="txt py-3 pl-2 pr-6 font-light text-left text-sm"> {{$partido->status}}</td>
                <td class="txt py-3 px-6 pr-3 font-light text-left text-sm"> {{$partido->fecha}}</td>
                <td class="txt py-3 px-6 pr-3 font-light text-left text-sm"> {{$partido->hora}}</td>
                <td class="txt py-3 px-6 pl-10 font-light cursor-pointer hover:text-yellow-900"><a href="{{route('showPartido',$partido->id)}}" class="fa fa-search"></a></td>
                
            </tr>

            @endforeach
        </table>


        </section>
@endsection

