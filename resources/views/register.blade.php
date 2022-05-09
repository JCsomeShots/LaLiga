@extends('layouts.layout')

@section('title', 'register')

@section('content')

<section class="tabla  mx-10 flex flex-col justify-center items-center mt-9">
    <h2 class="txt mt-4 text-2xl tracking-wider">Quieres dar de alta a un nuevo equipo</h2>

    <form action="{{route('teams.store')}}" method="post" class="flex flex-col  items-start my-9">

        @csrf

        <div class="flex flex-row justify-center items-center">
            <label for="nombreEquipo" class="mr-11 ">Nombre del equipo</label>
            <input type="text" id="nombreEquipo" name="name" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md">

            @error('name')
                <br>
                <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="sloganEquipo" class="mr-12 ">Slogan del equipo</label>
            <input type="text" id="sloganEquipo" name="slogan" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md">

            @error('slogan')
                <br>
                <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="club" class="mr-12 ">Entidad deportiva </label>
            <input type="text" id="club" name="club" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md">

            @error('club')
                <br>
                <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="flex flex-row justify-center items-center space-x-6 mt-2">
            <label for="antiguedad">Antigüedad del equipo:</label>
            <select name="creation" id="antiguedad" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5">
                <option value="menos de 2"> menos de 2</option>
                <option value="menos de 5"> menos de 5 </option>
                <option value="más de 5"> más de 5</option>
            </select>
        </div>

        <input type="submit" value="Registra" style="background-color: #036; text-align: center;" class="submit mx-auto px-3 py-1 ease-in duration-300 mt-4 rounded-lg bg-gray-400 shadow-lg cursor-pointer">
        
    </form>

   
</section>

        

@endsection



