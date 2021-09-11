@if(Session::has('success'))
    <button type="button" class="btn btn-primary" id="btnBreadcrumb" data-toggle="modal" data-target="#exampleModal" hidden></button>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro finalizado!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">{!! Session::get('success') !!}</li>
                    </ol>
                </nav>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#btnBreadcrumb').text('ok')
            $('#btnBreadcrumb').trigger('click')
        })
    </script>
@endif
@if(Session::has('error'))
    <button type="button" class="btn btn-primary" id="btnBreadcrumb" data-toggle="modal" data-target="#exampleModal" hidden></button>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro finalizado!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">{!! Session::get('error') !!}</li>
                    </ol>
                </nav>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#btnBreadcrumb').text('ok')
            $('#btnBreadcrumb').trigger('click')
        })
    </script>
@endif