<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>main access: clpp01</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Script -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <div class="container card text-center w-1/3">
        <div>
            <h1>Benvenuto a la página de Inicio de sesión para ingresar al proyecto.</h1>
        </div>
    </div>

    <body>
        <div class="container card w-1/3 flex justify-center items-center">
            <div class="flex">
                <div>
                    <button class="btn btn-success mr-4">
                        <a href="login">Login</a>
                    </button>

                    <button class="btn btn-success">
                        <a href="register">Registrar</a>
                    </button>
                </div>
            </div>
        </div>
    </body>

