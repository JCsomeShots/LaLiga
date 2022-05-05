@extends('layouts.layout')

@section('title', 'Calendar')

@section('content')

<section class="laTabla">

    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr class="p-2 items-center text-sm">
                <th class="txt py-3 pr-6 font-base pl-3 ">id</th>
                <th class="txt py-3 pr-6 font-base w-3/5 text-left">Equipo Local</th>
                <th class="txt py-3 pr-6 font-base w-3/5 text-left">Equipo visitante</th>
                <th class="txt py-3 px-6 font-base puntos">Fecha del Partido</th>
            </tr>
            
@foreach ($partidos as $partido)
<tr>
    <td class="txt py-3 pr-6 font-base pl-4 ">{{$partido->id}}</th>
  
    <td class="txt py-3 pr-6 font-base text-left"> {{$partido->nameLocal_id}}</th>
    <td class="txt py-3 pr-6 font-base text-left"> {{$partido->nameVisitor_id}}</th>
    <td class="txt py-3 pr-6 font-base text-left"> {{$partido->status}}</th>
</tr>

@endforeach
</table>


        </section>
@endsection

