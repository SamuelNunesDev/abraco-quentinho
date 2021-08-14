<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro Rápido</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row px-3 mb-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" id="anonimo" name="anonimo" aria-label="Checkbox for following text input">
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox" value="Desejo fazer uma doação anônima" readonly>
                </div>
            </div>
            <form action="" class="px-2 cadastro">
                <div class="row mb-2">
                    <div class="col-12 px-1">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col px-1">
                        <select id="tipoC" class="custom-select">
                            <option value="0" selected>Doar</option>
                            <option value="1">Ser um Colaborador</option>
                        </select>
                    </div>
                    <div class="col-9 px-1" id="tipoD">
                        <select class="custom-select">
                            <option value="0" selected>Entregar em um ponto de recolhimento</option>
                            <option value="1">Aguardar pela equipe na minha casa</option>
                        </select>
                    </div>
                </div>
                <span class="badge badge-danger h4" id="errocep">CEP não encontrado!</span>
                <div class="row mb-2 endereco">
                    <div class="col-3 px-1">
                        <input type="text" name="cep" class="form-control" maxlength="8" placeholder="CEP">
                    </div>
                    <div class="col px-1">
                        <input type="text" name="rua" class="form-control" placeholder="Rua">
                    </div>
                </div>
                <div class="row mb-2 endereco">
                    <div class="col-6 px-1">
                        <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                    </div>
                    <div class="col-6 px-1">
                        <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-success">
            <i class="fa fa-save"></i>
            Salvar Cadastro
        </button>
        </div>
      </div>
    </div>
</div>