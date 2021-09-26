<!-- Button trigger modal -->
<button type="button" id="btn-modal-chamado" class="btn btn-primary" data-toggle="modal" data-target="#modal-chamado" hidden></button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal-chamado" tabindex="-1" role="dialog" aria-labelledby="modal-chamado-title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="badge mt-2 mr-3" id="info-status"></span>
        <h5 class="modal-title" id="modal-chamado-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-9">
            <label for="info-nome">Nome:</label>
            <input type="text" class="form-control" id="info-nome" readonly>
          </div>
          <div class="form-group col">
            <label for="info-whatsapp">Whatsapp: </label>
            <input type="text" class="form-control" id="info-whatsapp" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6" id="section-responsavel">
            <label for="info-responsavel">Responsável:</label>
            <input type="text" class="form-control" id="info-responsavel" readonly>
          </div>
          <div class="form-group col-md-6" id="section-produto">
            <label for="info-produto">Produto:</label>
            <input type="text" class="form-control" id="info-produto" readonly>
          </div>
        </div>
        <div class="form-row" id="section-cep">
          <div class="form-group col-md-2">
            <label for="info-cep">Cep:</label>
            <input type="text" class="form-control" id="info-cep" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="info-bairro">Bairro:</label>
            <input type="text" class="form-control" id="info-bairro" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="info-cidade">Cidade:</label>
            <input type="text" class="form-control" id="info-cidade" readonly>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10" id="section-rua">
            <label for="info-rua">Rua:</label>
            <input type="text" class="form-control" id="info-rua" readonly>
          </div>
          <div class="form-group col" id="section-numero">
            <label for="info-numero">Número:</label>
            <input type="text" class="form-control" id="info-numero" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col" id="section-complemento">
            <label for="info-complemento">Complemento:</label>
            <input type="text" class="form-control" id="info-complemento" readonly>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <form method="POST" id="form-responsavel">
          @csrf
          @method('put')
          <input type="hidden" name="chamado_id" id="input-chamado_id">
          <button type="button" id="btn-responsavel" class="btn">
            <i class="fa fa-save"></i>&nbsp; Assumir chamado
          </button>
        </form>
      </div>
    </div>
  </div>
</div>