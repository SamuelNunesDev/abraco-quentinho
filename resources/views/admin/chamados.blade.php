@extends('layouts.dashboard')

@section('content')
    <main role="main" class="col-10 main px-4">
        <div class="d-flex justify-content-between align-items-center mt-1 pb-2">
          <h1 class="h2">Chamados</h1>
        </div>
          <table class="table table-stripped table-hover" id="chamados">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Tipo Chamado</th>
                <th scope="col">Produto</th>
              </tr>
            </thead>
          </table>
    </main>
@endsection
@section('javascript')
  <script>
    $(document).ready(function() {
      let chamados = $('#chamados').DataTable({
        ajax: {
          url: '{!! route('admin.chamados') !!}'
        },
        columns: [
          {data: 'nome', name: 'nome'},
          {data: 'tipo_chamado', name: 'tipo_chamado'},
          {data: 'produto', name: 'produto'}
        ]
      })

      $('#menu-chamados').addClass('active')
    })
  </script>
@endsection
