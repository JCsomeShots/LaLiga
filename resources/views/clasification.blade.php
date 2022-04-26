@extends('layouts.layout')

@section('title', 'Clasification')

@section('content')

<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr class="p-2 items-center text-sm">
                <th class="txt py-3 pr-6 font-base pl-3 ">#</th>
                <th class="txt py-3 pr-6 font-base w-3/5 text-left">Equipo</th>
                <th class="txt py-3 px-6 font-base puntos">PT</th>
                <th class="txt py-3 px-6 font-base">PJ</th>
                <th class="txt py-3 px-6 font-base ">PG</th>
                <th class="txt py-3 px-6 font-base">PE</th>
                <th class="txt py-3 px-6 font-base">PP</th>
            </tr>
            <tr>
                <td class="txt py-3 pr-6 font-base pl-4 ">1</th>
                <td class="txt equipo py-3 pr-6 font-base text-left"><a href="/show"> Madrid</a></th>
                <td class="txt py-3 pr-6 pl-8 font-base puntos">3</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">1</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">1</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">0</th>
                <td class="txt py-3 pr-6 pl-8 font-base mx-auto">0</th>
            </tr>
            <tr class="">
                <td class="txt py-3 pr-6 font-base pl-4 ">2</th>
                <td class="txt equipo py-3 pr-6 font-base text-left"><a href="/show">Barcelona</a></th>
                <td class="txt py-3 pr-6 pl-8 font-base puntos">0</th>
                <td class="txt py-3 pr-6 pl-8 font-base ">1</th>
                <td class="txt py-3 pr-6 pl-8 font-base ">0</th>
                <td class="txt py-3 pr-6 pl-8 font-base ">0</th>
                <td class="txt py-3 pr-6 pl-8 font-base ">1</th>
            </tr>
        </table>
    </div>
    <div class="explicacio txt flex justify-center mt-2">
        <p class="text-xs mr-3">PT = PUNTOS</p>
        <p class="text-xs mr-3">PJ = Partidos jugados</p>
        <p class="text-xs mr-3">PG = Partidos ganados</p>
        <p class="text-xs mr-3">PE = Partidos empatados</p>
        <p class="text-xs "> PP = Partidos perdidos</p>
    </div>
</section>


@endsection

