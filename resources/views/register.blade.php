@extends('layouts.layout')

@section('title', 'register')

@section('content')

<section class="tabla border-4 mx-10 flex flex-col justify-center items-center mt-9">
    <h2 class="txt mt-4 text-2xl tracking-wider">Quieres dar de alta a un nuevo equipo</h2>


    <form action="#" method="post" class="flex flex-col  items-start my-9">
        <div class="flex flex-row justify-center items-center">
            <label for="nombreEquipo" class="mr-11 ">Nombre del equipo</label>
            <input type="text" id="nombreEquipo" name="nombreEquipo" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md">
        </div>

        <div class="mt-2 flex flex-row justify-center items-center">
            <label for="sloganEquipo" class="mr-12 ">Slogan del equipo</label>
            <input type="text" id="sloganEquipo" name="nombreEquipo" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md">
        </div>

        <div class="flex flex-row justify-center items-center space-x-6 mt-2">
            <label for="antiguedad">Antigüedad del equipo:</label>
            <select name="anyos" id="antiguedad" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5">
                <option value="max2"> menos de 2 años</option>
                <option value="max5"> menos de 5 años</option>
                <option value="max10"> menos de 10 años</option>
                <option value="max"> más 10 años</option>
            </select>
        </div>

        <input type="submit" value="Registra" style="background-color: #036; text-align: center;" class="submit mx-auto px-3 py-1 ease-in duration-300 mt-4 rounded-lg bg-gray-400 shadow-lg cursor-pointer">
        
    </form>

   
</section>
<div class="txt flex justify-center mt-2">
    <p class="text-xs mr-3"><small>Si quieres dar de baja a un equipo</small></p>
    <a href="#" class="txt pincha align-text-bottom mr-2 flex items-end">
        <small>pincha aquí</small>
        <figure>
            <img src="img/pelotaNaranja.png" alt="pelotaDiseny" class="w-4 pelota ml-2 ease-in-out">
        </figure>
    </a>
    <p class="text-xs mr-3"><small>... por qué te vas?</small></p>
</div>
        

@endsection



