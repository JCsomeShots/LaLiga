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
	<script src="https://cdn.tailwindcss.com"></script>

    <title>@yield('title')</title>
</head>
<body>
    <header class=" cabecera flex flex-col justify-center ">

        <div class="titulo mx-auto my-8 flex items-center">
            <h1 class="text-6xl textoCabecera  -skew-y-6">La Liga de Campiones</h1>
            <figure>
                <img src=" {{ asset('img/pelotaNaranja.png') }}" alt="pelotaDiseny" class="w-14 animate-pulse ml-7">
            </figure>
        </div>
        <div class="line mx-3 border-b opacity-25 border-black"></div>


        <nav class="flex-none mx-16 my-5">
            <ul >
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline txt">
                    <a class=" textoCabecera text-lg hover:text-yellow-900" href="/result"> Resultados</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline ml-4">
                    <a class=" textoCabecera text-lg hover:text-yellow-900" href="/calendar"> Calendario</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline ml-4">
                    <a class="textoCabecera text-lg hover:text-yellow-900" href="/clasification"> Clasificación</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out float-right mr-2 textoCabecera">
                    <a href="/register"> Nuevo Equipo</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
       @yield('content')
    </main>
</body>
</html>