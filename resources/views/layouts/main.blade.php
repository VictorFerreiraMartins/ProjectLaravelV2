<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts do Google-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!--CSS Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--Meu CSS  -->
        <link rel="stylesheet" href="/css/styles.css">

        <!--JavaScript-->
        <script src="/js/scripts.js"></script>
        @yield('scripts')

    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                <img src="/img/header.png" alt="Header">
                </a>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Adicionar Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/list" class="nav-link">Listar Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/remove" class="nav-link">Remover Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link">Fale Conosco</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
        </div>
    </div>

    @yield('content') 
    <footer>
        <p>Publicação de teste de Victor Martins - &copy; 2022</p>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
