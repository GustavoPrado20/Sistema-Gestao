<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" href="{{ asset('') }}" type="image/x-icon">

        <title>Gestão</title>
        
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        @yield('styles')
    </head>

    <body>
        @include('layouts.menu-lateral')

        @yield('conteudo')

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>