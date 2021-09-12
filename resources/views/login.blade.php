<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{!! asset('imagens/favicon.ico') !!}" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('bootstrap/dist/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('bootstrap-icons/font/bootstrap-icons.css') !!}">
    <title>Login</title>
</head>
<body class="row justify-content-center pt-3 bg-danger text-light">
    <form class="p-5 border rounded" method="POST" action="{!! route('login.do') !!}">
      @csrf
        <section>
            <h2 style="font-family: Courgette;">
               <img class="mb-4" src="{!! asset('imagens/coracao-logo.png') !!}" alt="logo abraço quentinho"> Abraço Quentinho
            </h2>
            @if( Session::has('error') )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>{!! Session::get('error') !!}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
        </section>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-lg"></i> &nbsp; Entrar
        </button>
      </form>
      <script src="{!! asset('jquery/dist/jquery.min.js') !!}"></script>
      <script src="{!! asset('bootstrap/dist/js/boostrap.bundle.min.js') !!}"></script>
</body>
</html>