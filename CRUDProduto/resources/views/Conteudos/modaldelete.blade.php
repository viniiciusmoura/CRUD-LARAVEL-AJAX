<!-- Modal  DELETE-->
<div class="modal fade" id="modaldelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaldelete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Excluir produto</h5>
        </div>
        <div class="modal-body">
            <form  class="row formd"  id="modaldelete" action="{{route('delete')}}" >
                @csrf
                    <input type="hidden" name="idel" id="idel" value="">
                    <div>
                        <strong>Tem certeza que deseja excluir esse produto?</strong>
                    </div>
                    <br><br>
                    <div class="col-md-6 offset-md-7">
                        <button type="button" class="btn btn-secondary" id="cancel">Cancelar</button>
                        <button type="submit" id="deletep" class="btn btn-danger">Excluir</button>
                    </div>
            </form>
        </div>
        </div>
    </div>
</div>