<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('tituloPagina')</title>
        <!-- Seguridad -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="/css/app.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Estilo Base que resetea TODO el css default y elementos esenciales -->
        <link rel="stylesheet" type="text/css" href="{{url('css/Base.css')}}">


        <!-- Styles -->
        @yield('EstiloPlus')

    </head>
    <body>
        
          <!-- Este es el elemento root, aqui le pasamos los datos  -->
        <div id = "root" data = "{{json_encode($datos)}}" ></div>
        <script src="/js/app.js"></script>

    </body>
</html>