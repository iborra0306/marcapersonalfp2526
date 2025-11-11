<html>
    <head>
        <title>Mi Web</title>
    </head>
    <body style="background-color: lightsalmon;">
        @section('menu')
            Contenido del menu
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
