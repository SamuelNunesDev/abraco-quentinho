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
    <script src="{!! asset('./jquery/dist/jquery.min.js') !!}"></script>
    <title>Abraço Quentinho Admin</title>
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
            <a class="nav-link active" href="#">Chamados</a>
          </li>
          <li class="nav-item list">
            <a></a>
          </li>
        </ul>
    </nav>   
    <main role="main" class="col-10 main px-4">
        <div class="d-flex justify-content-between align-items-center mt-1 border-bottom pb-2">
          <h1 class="h2">Chamados</h1>
        </div>
        <section class="row mt-4">
          <table class="table table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
          </table>
        </section>
    </main> 