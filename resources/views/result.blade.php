@extends('layouts.layout')

@section('title', 'result '.$partido->id)

@section('content')

        
<section>

    
</section>
<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr>
                <td class="txt py-3 font-base pl-4 ">Local</th>
                <td class="txt pl-3 font-base text-left">{{$partido->nameLocal_id}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Visitor</th>
                    <td class="txt pl-3 font-base text-left">{{$partido->nameVisitor_id}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Estado del evento</th>
                    <td class="txt pl-3 font-base text-left">{{$partido->status}}</th>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Fecha del partido</th>
                    <td class="txt pl-3 font-base text-left">{{$partido->fecha}}</th>
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
