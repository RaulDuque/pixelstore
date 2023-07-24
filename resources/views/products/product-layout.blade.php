<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-EDGE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <ul id="slide-out" class="sidenav sidenav-fixed" style="width: 15%;">
            <li class="logo">
                <a id="logo-container" href="/" class="brand-logo">
                    <img src="{{ asset('images/logotype3.png') }}" alt="Logo">
                </a>
            </li>
            <li class="bold center-align " style="margin-top: 20%;">
                <div class="collapsible-body" style="display: block;">
                    <ul>
                        <li><a href="helpers.html">Inicio</a></li>
                        <li><a href=" {{ route('product.list') }}"> listar produtos</a></li>
                        <li><a href="{{ route('products.create') }}">criar produtos</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        @yield('contents')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
</html>

