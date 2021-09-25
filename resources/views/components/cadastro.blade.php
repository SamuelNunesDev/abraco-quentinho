<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro Rápido</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{!! route('store') !!}" method="post" class="px-2 cadastro">
            @csrf
            <div class="modal-body">
                <div class="row mb-2 ">
                    <div class="col-12 px-1">
                        <input type="text" name="nome" class="form-control campo" placeholder="Nome" required>
                    </div>
                </div>
                <div class="row mb-2 ">
                    <div class="col px-1">
                        <select class="custom-select" id="tipoC" name="tipoC">
                            <option value="0">Doar</option>
                            <option value="1">Fazer parte do time de entregas</option>
                        </select>
                    </div>
                    <div class="col-9 px-1 " id="tipoD">
                        <select class="custom-select" name="tipoD">
                            <option value="0">Entregar em um ponto de recolhimento</option>
                            <option value="1">Aguardar pela equipe na minha casa</option>
                        </select>
                    </div>
                </div>
                <span class="badge badge-danger h4" id="errocep">CEP não encontrado!</span>
                <div class="row mb-2 endereco ">
                    <div class="col-3 px-1">
                        <input type="text" name="cep" class="form-control" maxlength="9" placeholder="CEP">
                    </div>
                    <div class="col px-1">
                        <input type="text" name="rua" class="form-control campo-endereco" placeholder="Rua">
                    </div>
                </div>
                <div class="row mb-2 endereco ">
                    <div class="col-6 px-1">
                        <input type="text" name="bairro" class="form-control campo-endereco" placeholder="Bairro">
                    </div>
                    <div class="col-6 px-1">
                        <input type="text" name="cidade" class="form-control campo-endereco" placeholder="Cidade">
                    </div>
                </div>
                <div class="row mb-2 endereco ">
                    <div class="col-3 px-1">
                        <input type="number" name="numero" class="form-control campo-endereco" min="0" placeholder="Número">
                    </div>
                    <div class="col px-1">
                        <input type="text" name="complemento" class="form-control" placeholder="Complemento">
                    </div>
                </div>
                <div class="row mb-2 ">
                    <div class="col px-1">
                        <input type="text" name="whatsapp" class="form-control campo" maxlength="13" minlength="13" placeholder="Whatsapp" required>
                    </div>
                    <div class="col-8 px-1">
                        <input type="text" name="produto" class="form-control" placeholder="Produto">
                    </div>
                </div>
                <div class="row px-1" id="anonimo">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="anonimo" value="1" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Desejo fazer uma doação anônima" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Salvar Cadastro
                </button>
            </div>
        </form>
      </div>
    </div>
</div>