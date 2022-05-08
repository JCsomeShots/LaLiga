@extends('layouts.layout')

@section('title', 'show '.$partido->id)

@section('content')

        
<section class="laTabla">
    <div class="cabeceraTabla flex justify-center items-center">

        <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
            <tr>
                <td class="txt py-3 font-base pl-4 ">Equipo Local</th>
                <td class="txt pl-3 font-base text-left">{{$partido->nameLocal}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Equipo visitante</td>
                    <td class="txt pl-3 font-base text-left">{{$partido->nameVisitor}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Fecha del partido</td>
                    <td class="txt pl-3 font-base text-left">{{$partido->fecha}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Hora del partido</td>
                    <td class="txt pl-3 font-base text-left">{{$partido->hora}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Status del partido</td>
                    <td class="txt pl-3 font-base text-left">{{$partido->status}}</td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Editar</td>
                <td class="txt py-3 px-6 pr-3 pl-4 font-light cursor-pointer hover:text-yellow-900"><a href="{{route('partidosEdit' , $partido)}}" class="fa fa-cogs"></a></td>
            </tr>
            <tr>
                <td class="txt py-3 font-base pl-4 ">Eliminar</td>
                <td>
                <form action="{{route('destroyPartido' , $partido)}}" method="POST">

                @csrf
                @method('delete')
                        <button type="submit" class="txt py-3 px-6 pr-3 pl-4 font-light cursor-pointer hover:text-yellow-900">
                            <i class="fa fa-trash-o mt-4 cursor-pointer hover:text-yellow-900" style="font-size:20px"></i>
    
                        </button>
                </form>
                </td>
            </tr>
           
        </table>
    </div>
    
    
</section>
@endsection


