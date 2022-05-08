@extends('layouts.layout')

@section('title', 'partidoEdit')

@section('content')

<section>
    {{-- {{$partidos}} --}}
   
</section>
<section class="tabla border-4 mx-10 flex flex-col justify-center items-center mt-9">
    <h2 class="txt mt-4 text-2xl tracking-wider">Quieres modificar un partido ya programado</h2>
    <h3 class="mt-2">Los equipos competidores no podrán modificarse, para tal caso deberás eliminar y volver a crear el encuentro</h3>

    <form action="{{route('updatePartido', $partido)}}" method="post" class="flex flex-col  items-start my-9">

        @csrf
        @method('put')

        <div class="flex flex-row justify-center items-center">
            <label for="nombreEquipo" class="mr-11 ">Nombre del equipo local </label>

            <input class="pl-3 rounded ml-3" type="text" size="50" name="nameLocal" readonly value="{{$partido->nameLocal}}">
        </div>

        <div class="flex flex-row justify-center items-center mt-2">
            <label for="nombreEquipo" class="mr-5 ">Nombre del equipo visitante &nbsp;</label>
            <input size="50" class="pl-3 rounded" type="text" name="nameVisitor" readonly value="{{$partido->nameVisitor}}">
           
        </div>

        <div class="flex flex-row justify-center items-center space-x-6 mt-2">
            <label for="antiguedad" class="mr-16">Estado del evento &nbsp;</label>
            <select name="status" id="antiguedad" class="rounded  px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5" value ="{{$partido->status}}">

                <option value="programado">Programado</option>
                <option value="ejecucion">Ejecutándose</option>
                <option value="terminado">Terminado</option>
            </select>
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="fecha" class="mr-20">Fecha del partido</label>
            <input type="date" name="fecha" value="{{$partido->fecha}}" size="40" class="pl-2 ml-5 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" required>
        </div>
        
        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="hora" class="mr-20">Hora del partido</label>
            <input type="time" name="hora" value="{{$partido->hora}}" size="40" class="pl-2 ml-7 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" required>
        </div>

        <div class="flex">
               
            <form action="{{route('destroyPartido' , $partido)}}" method="POST">

            @csrf
            @method('delete')
                    <button type="submit" class="txt py-3 px-6 pr-3 pl-4 font-light cursor-pointer hover:text-yellow-900">
                        <i class="fa fa-trash-o mt-4 cursor-pointer hover:text-yellow-900" style="font-size:30px"></i>

                    </button>


            </form>
        </div>

        <input type="submit" value="Edita el encuentro" style="background-color: #036; text-align: center;" class="submit mx-auto px-3 py-1 ease-in duration-300 mt-4 rounded-lg bg-gray-400 shadow-lg cursor-pointer">
        
    </form>

   
</section>
@endsection

