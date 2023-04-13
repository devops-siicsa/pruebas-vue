<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
        @vite('resources/css/app.css')

        
        
    </head>
    <body class="antialiased">
        
        <h1>Hola mundo</h1>

        <div id="app">
            <prueba></prueba>
        </div>     



        @vite('resources/js/app.js')
    </body>
</html>
