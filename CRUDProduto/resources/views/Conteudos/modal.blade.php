<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="info"></div>
            <form  class="row" action="{{route('createorupdate')}}" method="post" id="modalCreate">
                @csrf
                <input type="hidden" name="id" id="id">
                <div class="col-12">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" value="">
                </div>
                <div class="col-12">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input type="text" name="descricao" class="form-control" id="descricao" value="" >
                </div>
                <div class="col-md-6">
                    <label for="quanty" class="form-label">Quantidade:</label>
                    <input type="number" name="quant" class="form-control" id="quanty" value="" >
                </div>

                <div class="col-md-6"> 
                    <label for="valorp" class="form-label">Valor:</label>
                    <input type="text" name="valor" class="form-control" id="valorp" value="">
                </div><br>
                <br><br><br>
                <div class="col-12 modal-footer">
                    <button type="submit" id="createp" class="btn btn-primary"></button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>