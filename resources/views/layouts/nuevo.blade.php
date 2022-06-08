<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Permisos - @yield('titulo')</title>

        <link rel="stylesheet" href="/css/main.css">  

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href="/login">Login</a>
            <a href="/registro">Boletas</a>
        </nav>

        <h1>@yield('titulo')</h1>

        <hr>
       
        @yield('contenido')

    </body>
</html>
