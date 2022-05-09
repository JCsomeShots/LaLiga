@extends('layouts.layout')

@section('title', 'teamEdit')

@section('content')

<section style=" background-color: rgba(0, 0, 0, 0.6);" class="tabla flex flex-col justify-center items-center mt-14 mx-auto w-6/12 rounded-xl">
    <h2 class="txt mt-4 text-2xl tracking-wider" style="color: #fff;">Quieres modificar la información de tu equipo?</h2>

    <form action="{{route('updateTeam', $team)}}" method="post" class="flex flex-col  items-start my-9">

        @csrf
        @method('put')

        <div class="flex flex-row justify-center items-center">
            <label for="nombreEquipo" style="color: #fd7702;" class="mr-11">Nombre del equipo</label>
            <input type="text" id="nombreEquipo" name="name" style="color: #fd7702;" size="40" class="pl-2 ml-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" value="{{$team->name}}">

            @error('name')
                <br>
                <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="sloganEquipo" style="color: #fd7702;" class="mr-12 ">Slogan del equipo</label>
            <input type="text" id="sloganEquipo" name="slogan" style="color: #fd7702;" size="40" class="pl-2 ml-3 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" value="{{$team->slogan}}">

            @error('slogan')
                <br>
                <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="club" style="color: #fd7702;" class="mr-12 ">Entidad deportiva</label>
            <input type="text" id="club" name="club" style="color: #fd7702;" size="40" class="pl-2 ml-4 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md" value="{{$team->club}}">

            @error('club')
                <br>
                <small>&nbsp;&nbsp;*&nbsp;{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="flex flex-row justify-center items-center space-x-6 mt-2">
            <label for="antiguedad" style="color: #fd7702;" >Antigüedad del equipo:</label>
            <select name="creation" id="antiguedad" style="color: #fd7702;" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5">
                <option value="menos de 2"> menos de 2</option>
                <option value="menos de 5"> menos de 5 </option>
                <option value="más de 5"> más de 5</option>
            </select>
        </div>

        <input type="submit" value="Edita este equipo" style="background-color: #fd7702; color:#000a13;  text-align: center;" class="submit mx-auto px-3 py-1 ease-in duration-300 mt-4 rounded-lg bg-gray-400 shadow-lg cursor-pointer">
        
    </form>

   
</section>

        

@endsection



