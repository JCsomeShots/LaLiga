


# LaLiga  -- Laravel
A calendar to schedule and modify your matches



![Clasification](https://raw.githubusercontent.com/JCsomeShots/laLiga/main/asset/team_Clasification.png)






Proyecto realizado dentro del Bootcamp del IT Academy. 
Este proyecto esta realizado con Laravel , PHP , Tailwind siguiendo la arquitectura del MVC - CRUD



PARA EL PROYECTO

Requisitos previos 
1.- Es necesario tener en el sistema operativo composer de manera global

2.- Tener instalado GIT

3.- Contar con un entorno de desarrollo como Xamp, Wamp


Pasos a seguir

1.- Clonar el repositorio del proyecto en Laravel
    -- git clone https://github.com/JCsomeShots/laLiga.git
    
2.- Instalar dependencias del proyecto
    -- Ingrese en terminal :  composer install
    
3.- Generar archivo .env
    -- Ingrese en terminal :  cp .env.example .env
    
4.- Generar Key
    -- Ingrese en terminal :  php artisan key:generate
    
5.- Crear base de datos
    -- Ingrese en terminal :  mysql -u root -p
                           :  CREATE DATABASE laLiga2 CHARACTER SET utf8 COLLATE utf8_spanish_ci;
                           
6.- Correr migraciones y seeds

    -- a: En caso de querer crear equipos aleatorios    Ingrese en terminal :  php artisan migrate:fresh --seed
    
    -- b: No creará equipos aleatorios                  Ingrese en terminal :  php artisan migrate:fresh --seed
    
7.- Iniciar el servidor 
    -- Ingrese en terminal :  php artisan serve
    
8.- Abrir un ventana del navegador y escribir vuestro servidor local


Si todo es correcto el proyecto podra utilizarse sin problemas







Programación del encuentro deportivo
![Matches](https://raw.githubusercontent.com/JCsomeShots/laLiga/main/asset/matches_show.png)





