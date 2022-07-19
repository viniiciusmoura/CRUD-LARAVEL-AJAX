<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Produto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-secondary">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#">CRUD Produtos</a>
                </div>
            </nav>
        </header><br>
        @yield('inicio')
        <br>
        @include('Conteudos.table')
        @include('Conteudos.modal')
        @include('Conteudos.modaldelete')
        <footer class="bg-secondary text-white text-center my-5">    
            <small>Create by Vinícius Moura &copy; {{date('Y')}}</small>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>