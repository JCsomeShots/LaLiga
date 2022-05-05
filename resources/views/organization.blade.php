@extends('layouts.layout')

@section('title', 'organization')

@section('content')

       
<section class="tabla border-4 mx-10 flex flex-col justify-center items-center mt-9">
    <h2 class="txt mt-4 text-2xl tracking-wider">Quieres programar un nuevo partido</h2>

    <form action="{{route('organization.store')}}" method="post" class="flex flex-col  items-start my-9">

        @csrf

        <div class="flex flex-row justify-center items-center">
            <label for="nombreEquipo" class="mr-11 ">Nombre del equipo local </label>
            <select name="nameLocal" id="antiguedad" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5">
                @foreach ($teams as $team)
                <option value="{{$team->name}}">{{ $team->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-row justify-center items-center mt-2">
            <label for="nombreEquipo" class="mr-5 ">Nombre del equipo visitante &nbsp;</label>
            <select name="nameVisitor" id="antiguedad" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5">
                @foreach ($teams as $team)
                <option value="{{$team->name}}">{{$team->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-row justify-center items-center space-x-6 mt-2">
            <label for="antiguedad" class="mr-12">Estado del evento &nbsp;</label>
            <select name="status" id="antiguedad" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5 ">
                <option value="programado">Programado</option>
                <option value="ejecucion">Ejecutándose</option>
                <option value="terminado">Terminado</option>
            </select>
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="fecha" class="mr-20">Fecha del partido</label>
            <input type="datetime-local" name="fecha" value="2022-05-16T15:25" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" required>
        </div>

        <input type="submit" value="Registra" style="background-color: #036; text-align: center;" class="submit mx-auto px-3 py-1 ease-in duration-300 mt-4 rounded-lg bg-gray-400 shadow-lg cursor-pointer">
        
    </form>

   
</section>
@endsection

