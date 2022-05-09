@extends('layouts.layout')

@section('title', 'partidoEdit')

@section('content')

<section>
    {{-- {{$partidos}} --}}
   
</section>
<section class="tabla flex flex-col justify-center items-center mt-9 rounded-2xl mx-auto w-6/12" style=" background-color: rgba(0, 0, 0, 0.6);">

    <h2 class="txt mt-4 text-2xl tracking-wider" style=" color: rgba(255,255,255, 0.7);">Quieres modificar un partido ya programado</h2>
    <h3 class="mt-2 text-xs" style=" color: rgba(255,255,255, 0.7);"> * Los equipos competidores no podrán modificarse</h3>

    <form action="{{route('updatePartido', $partido)}}" method="post" class="flex flex-col  items-start my-9">

        @csrf
        @method('put')

        <div class="flex flex-row justify-center items-center">
            <label for="nombreEquipo" class="mr-11 " style="color: #fd7702;">Nombre del equipo local </label>

            <input class="pl-3 rounded ml-3" type="text" style="color: #fd7702;" size="50" name="nameLocal" readonly value="{{$partido->nameLocal}}">
        </div>

        <div class="flex flex-row justify-center items-center mt-2">
            <label for="nombreEquipo" class="mr-5 " style="color: #fd7702;">Nombre del equipo visitante &nbsp;</label>
            <input style="color: #fd7702;" size="50" class="pl-3 rounded" type="text" name="nameVisitor" readonly value="{{$partido->nameVisitor}}">
           
        </div>

        <div class="flex flex-row justify-center items-center space-x-6 mt-2">
            <label for="antiguedad" class="mr-16" style="color: #fd7702;">Estado del evento &nbsp;</label>
            <select style="color: #fd7702;" name="status" id="antiguedad" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5 ml-9" value ="{{$partido->status}}">

                <option value="programado">Programado</option>
                <option value="ejecucion">Ejecutándose</option>
                <option value="terminado">Terminado</option>
            </select>
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="fecha" class="mr-20" style="color: #fd7702;">Fecha del partido</label>
            <input type="date" name="fecha" style="color: #fd7702;" value="{{$partido->fecha}}" size="40" class="pl-2 ml-5 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" required>

            @error('fecha')
                <br>
                <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
                <br>
            @enderror
        </div>
        
        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="hora" class="mr-20" style="color: #fd7702;">Hora del partido</label>
            <input style="color: #fd7702;" type="time" name="hora" value="{{$partido->hora}}" size="40" class="pl-2 ml-7 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" required>

            @error('hora')
            <br>
            <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
            <br>
        @enderror

        </div>

        

        <input type="submit" value="Edita el encuentro" style="background-color: #fd7702; color:#000a13; text-align: center;" class="submit mx-auto px-3 py-1 ease-in duration-300 mt-8 rounded-lg bg-gray-400 shadow-lg cursor-pointer">
        
    </form>
    <div class="flex">
               
        <form action="{{route('destroyPartido' , $partido)}}" method="POST">

        @csrf
        @method('delete')
                <button type="submit" class="txt pb-4 font-light cursor-pointer hover:text-yellow-900">
                    <i class="fa fa-trash-o mb-4 cursor-pointer hover:text-yellow-900" style="color: #fd7702; font-size:30px"></i>

                </button>


        </form>
    </div>

   
</section>
@endsection

