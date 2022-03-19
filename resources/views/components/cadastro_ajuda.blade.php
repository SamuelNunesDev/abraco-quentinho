<!-- Modal -->
<div class="modal fade" id="cadastro-ajuda" tabindex="-1" role="dialog" aria-labelledby="cadastro-ajuda-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadastro-ajuda-title">Cadastro Rápido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{!! route('store.ajuda') !!}" method="POST">
              @csrf
              <div class="form-group row">
                <label for="nome-ajuda" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nome-ajuda" name="nome" placeholder="Digite seu nome" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="whatsapp-ajuda" class="col-sm-2 col-form-label">Whatsapp: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="whatsapp-ajuda" name="whatsapp" placeholder="Digite seu Whatsapp" required>
                </div>
              </div>
              <div class="form-group row">
                  <label for="tipo-ajuda" class="col-sm-2 col-form-label">Ajuda: </label>
                  <div class="col-sm-10">
                    <select name="tipo_chamado" class="form-control" required>
                        <option>Selecione um tipo</option>
                        <option value="6">Financeira</option>
                        <option value="7">Psicológica</option>
                        <option value="8">Espiritual</option>
                        <option value="9">Alimentos</option>
                        <option value="10">Roupas</option>
                    </select>
                  </div>
                </div>
              </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i>&nbsp; Cadastrar
              </button>
          </div>
      </form>
    </div>
  </div>
</div>