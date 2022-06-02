@extends('layouts.layout')

@section('title', 'Clasification')

@section('content')

<section class="laTabla">

    <div class="flex justify-center mt-8 text-lg mt-14"><p class="blanco"> Si deseas más información clica sobre un equipo</p></div>

    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla rounded-xl w-screen mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr class="p-2 items-center text-sm mt-5">
                <th class="txt py-3 pr-12 font-normal  ">#</th>
                <th class="txt py-3 pr-6 font-base text-left">Equipo</th>
                <th class="txt py-3 pr-6 font-base text-left">Club</th>
                
            </tr>
            
            @foreach ($teams as $team)
            <tr>
                <td class="text-base txt py-3 pr-6  pl-7 ">{{$team->id}}</td>

                <td class="text-base txt equipo py-3 pr-6  text-left"><a href="{{route('showTeam',$team->id)}}"> {{$team->name}}</a></td>

                <td class="text-base txt py-3 pr-6  text-left"><a href="{{route('showTeam',$team->id)}}"> {{$team->club}}</a></td>
            
            </tr>

            @endforeach
            
        </table>
    </div>
    
</section>


@endsection

