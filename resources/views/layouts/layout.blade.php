<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="PHP, language, code, La Liga, Laravel, Composer, MVC, Sprint4, ITacademy, BarcelonActiva">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="Ejercicio que implementa una liga de futbol a través de Laravel">
    <meta name="author" content="JcSomeCodes , JcSomeShots ">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Square+Peg&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.tailwindcss.com"></script>

    <title>@yield('title')</title>
</head>
<body style="background-image: url({{ asset('img/pelotaBg.jpeg') }})" class="bg-no-repeat bg-top bg-cover">
    <header class=" cabecera flex flex-col justify-center " style="background-color: rgba(0, 10, 19, 0)">

        <div class="titulo mx-auto my-8 flex items-center">
            <h1 class="text-6xl textoCabecera  -skew-y-6" style="color: #fd7702; font-family: 'Square Peg', cursive;">La Liga de Campeones</h1>
            <figure>
                <img src=" {{ asset('img/pelotaNaranja.png') }}" alt="pelotaDiseny" class="w-14 animate-pulse ml-7">
            </figure>
        </div>
        <div class="line mx-3 border-b opacity-25 border-black"></div>


        <nav class="flex-none mx-16 my-5" >
            <ul >
                {{-- <li class="cursor-pointer transition-all duration-150 ease-in-out inline txt">
                    <a class=" textoCabecera text-lg hover:text-yellow-900" href="{{route('result')}}"> Resultados</a>
                </li> --}}
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline ml-4" style="color: #fd7702;">
                    <a class=" textoCabecera text-lg hover:text-yellow-900" href="{{route('calendar')}}"> Calendario</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline ml-8" style="color: #fd7702;">
                    <a class="textoCabecera text-lg hover:text-yellow-900" href="{{route('clasification')}}"> Clasificación</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out float-right mr-2 textoCabecera" style="color: #fd7702;">
                    <a class="textoCabecera text-lg hover:text-yellow-900" href="{{route('register')}}">Nuevo Equipo</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out float-right mr-8 textoCabecera" style="color: #fd7702;">
                    <a class="textoCabecera text-lg hover:text-yellow-900" href="{{route('organization')}}">Programar</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
       @yield('content')
    </main>
    <footer class=" w-11/12 rounded-xl ml-12">
        <div class=" mx-auto flex justify-center  py-2 txt mt-11" style="color: #fd7702;">
            <p> &copy; by &nbsp;&nbsp;&nbsp;JcSomeShots </p>
            <a href="https://www.instagram.com/jcsomeshots/" class="cursor-pointer byJC mx-2 fa fa-instagram" aria-hidden="true"></a>
            <p>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; JcSomeCodes </p> 
            <a href="https://github.com/JCsomeShots" class="cursor-pointer byJC ml-2 fa fa-github " aria-hidden="true"></a>
        </div>
    </footer>
</body>
</html>