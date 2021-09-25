@extends('layouts.dashboard')

@section('content')
    <main class="container mt-3 offset-2 px-5">
        <h1 class="mb-4">Cadastrar Usuário</h1>
        <form action="{!! route('admin.usuarios.cadastrar') !!}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user">Nome:</label>
                <input type="text" class="form-control col-3" id="user" name="user" placeholder="Foo Bar">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control col-3" id="email" name="email" placeholder="foo@bar.com">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control col-3" id="password" name="password" placeholder="**********">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </main>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $('#menu-usuarios').addClass('active')
        })
    </script>
@endsection