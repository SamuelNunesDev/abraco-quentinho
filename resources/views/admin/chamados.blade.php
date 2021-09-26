@extends('layouts.dashboard')
@include('components.modal_chamado')
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
                <th scope="col">Status</th>
                <th scope="col">Responsável</th>
              </tr>
            </thead>
          </table>
    </main>
@endsection
@section('javascript')
  <script>
    $(document).ready(function() {
      let url_base = '{!! url('admin/chamados') !!}'
      let chamados = $('#chamados').DataTable({
        ajax: {
          url: '{!! route('admin.chamados') !!}'
        },
        columns: [
          {data: 'nome', name: 'nome'},
          {data: 'tipo_chamado', name: 'tipo_chamado'},
          {data: 'status',
            render: function(data, type, row) {
              switch(data) {
                case 0: 
                  return '<span class="badge badge-danger">Em Espera</span>'
                case 1:
                  return '<span class="badge badge-warning">Em Andamento</span>'
                case 2:
                  return '<span class="badge badge-success">Finalizado</span>'
              }
          }, name: 'status'},
          {data: 'responsavel',
            render: function(data) {
              if(data) {
                return  `<span class="badge badge-success">${data}</span>`
              }
              return `<span class="badge badge-danger">Nenhum</span>`
            }, name: 'responsavel'}
        ]
      })

      $('#menu-chamados').addClass('active')

      $('#chamados').on('click', 'tbody tr', function() {
        let nome = $(this).data('nome')
        let tipo_chamado = $(this).data('tipo_chamado')
        let status = $(this).data('status')
        let whatsapp = $(this).data('whatsapp')
        let produto = $(this).data('produto')
        let responsavel = $(this).data('responsavel')
        let rua = $(this).data('rua')
        let numero_casa = $(this).data('numero_casa')
        let bairro = $(this).data('bairro')
        let cidade = $(this).data('cidade')
        let cep = $(this).data('cep')
        let complemento = $(this).data('complemento')
        let id = $(this).data('id')

        whatsapp = `(${String(whatsapp).substr(0, 2)}) ${String(whatsapp).substr(2, 5)}-${String(whatsapp).substr(7)}`
        cep = cep ? `${String(cep).substr(0, 5)}-${String(cep).substr(5)}` : false
        $('#input-chamado_id').val(id)
        $('#btn-modal-chamado').trigger('click')

        $('#input-chamado_id').val(id)
        $('#info-nome').val(nome)
        $('#modal-chamado-title').text(tipo_chamado)
        switch( status ) {
          case 0: 
            $('#info-status').addClass('badge-danger').text('Em Espera')
            $('#btn-responsavel').addClass('btn-primary')
                                  .show()
                                  .removeClass('btn-success')
                                  .html(`<i class="fa fa-save"></i>&nbsp; Assumir chamado`)
            $('#form-responsavel').attr('action', `${url_base}/${id}`)
            break
          case 1:
            $('#info-status').addClass('badge-warning').text('Em Andamento')
            $('#btn-responsavel').addClass('btn-success')
                                  .show()
                                  .removeClass('btn-primary')
                                  .html(`<i class="fa fa-check"></i>&nbsp; Finalizar chamado`)
            $('#form-responsavel').attr('action', `${url_base}/fechar/${id}`)
            break
          case 2:
            $('#info-status').addClass('badge-success').text('Finalizado')
            $('#btn-responsavel').hide()
            break
        }
        $('#info-whatsapp').val(whatsapp)
        if( produto ) {
          $('#section-produto').attr('hidden', false)
          $('#info-produto').val(produto)
        } else {
          $('#section-produto').attr('hidden', true)
        }
        if( responsavel ) {
          $('#section-responsavel').attr('hidden', false)
          $('#info-responsavel').val(responsavel)
        } else {
          $('#section-responsavel').attr('hidden', true)
        }
        if( rua ) {
          $('#section-rua').attr('hidden', false)
          $('#info-rua').val(rua)
        } else {
          $('#section-rua').attr('hidden', true)
        }
        if( numero_casa ) {
          $('#section-numero').attr('hidden', false)
          $('#info-numero').val(numero_casa)
        } else {
          $('#section-numero').attr('hidden', true)
        }
        if( cep ) {
          $('#section-cep').attr('hidden', false)
          $('#info-cep').val(cep)
          $('#info-bairro').val(bairro)
          $('#info-cidade').val(cidade)
        } else {
          $('#section-cep').attr('hidden', true)
        }
        if( complemento ) {
          $('#section-complemento').attr('hidden', false)
          $('#info-complemento').val(complemento)
        } else {
          $('#section-complemento').attr('hidden', true)
        }
        $('#btn-responsavel').on('click', function() {
          $('#form-responsavel').submit()
        })
      })
    })
  </script>
@endsection
