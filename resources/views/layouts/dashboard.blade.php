<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{!! asset('./bootstrap/dist/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('./css/admin.css') !!}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('./imagens/favicon.ico') !!}" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('datatables.net-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <title>Dashboard</title>
</head>
  <body>
    <header class="navbar navbar-dark bg-dark flex-nowrap fixed-top shadow py-0">
      <a class="navbar-brand col-3 text-light text-justify px-4" href="#">
        <img src="{!! asset('./imagens/coracao-logo.png') !!}" >
        Abraço Quentinho
      </a>
      <div class="navbar-nav px-3">
        <a class="nav-item nav-link text-nowrap" href="{!! route('login.logout') !!}">Sair</a>
      </div>   
    </header>
    <nav class="col-2 bg-light sidebar shadow">
        <ul class="nav flex-column">
          <li class="nav-item list">
            <a class="nav-link" href="{!! route('admin.chamados') !!}" id="menu-chamados">Chamados</a>
          </li>
          @if(Auth::user()->email === 'sammoc11@hotmail.com')
            <li class="nav-item list">
              <a class="nav-link" href="{!! route('admin.usuarios') !!}" id="menu-usuarios">Usuários</a>
            </li>
          @endif
        </ul>
    </nav>

    @yield('content')

    <script src="{!! asset('jquery/dist/jquery.min.js') !!}"></script>
    <script src="{!! asset('bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('datatables.net-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>

    @yield('javascript')

</body>
</html>
    