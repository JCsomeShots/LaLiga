@extends('layouts.layout')

@section('title', 'show '.$partido->id)

@section('content')

        
<section>

    
</section>
<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">
        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr>
                <td class="txt py-3 font-base pl-4 ">Equipo Local</th>
                <td class="txt pl-3 font-base text-left">{{$partido->nameLocal}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Equipo visitante</th>
                    <td class="txt pl-3 font-base text-left">{{$partido->nameVisitor}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Fecha del partido</th>
                    <td class="txt pl-3 font-base text-left">{{$partido->fecha}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Status del partido</th>
                    <td class="txt pl-3 font-base text-left">{{$partido->status}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Editar</th>
                <td class="txt py-3 px-6 pr-3 pl-10 font-light cursor-pointer hover:text-yellow-900"><a href="{{route('partidosEdit' , $partido)}}" class="fa fa-cogs"></a></td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Eliminar</th>
                <td class="txt py-3 px-6 pr-3 pl-10 font-light cursor-pointer hover:text-yellow-900"><i class="fa fa-trash-o"></td>
            </tr>
           
        </table>
    </div>
    
    
</section>
@endsection


