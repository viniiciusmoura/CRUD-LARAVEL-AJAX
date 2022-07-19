$(document).ready(function () {
    var table=$('.table-hover').DataTable({
        serverSide: true,
        ajax: "loadados",
        columns: [
            {data: 'id'},
            {data: 'nome'},
            {data: 'descricao'},
            {data: 'quantidade'},
            {data: 'valor'},
            {data: 'action', orderable: false, searchable: false},
        ],
        language:{
            url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
        }
    });
    $('body').on('click','#btn-cadastrar', function () {
        $('#modalCreate').trigger('reset');
        $('#staticBackdropLabel').html("Cadastrar Produto"); 
        $('#createp').html("Cadastrar");
        $('#staticBackdrop').modal('show');
    });
    $('body').on('click','.edit',function() {  
        $('#staticBackdropLabel').html("Editar Produto");$('#info').html("");
        $('#createp').html("Salvar");
        var id= $(this).data('id');
        $.get('editar/'+ id, function (data) {
            $('#id').val(id);
            $('#nome').val(data.nome);
            $('#descricao').val(data.descricao);
            $('#quanty').val(data.quantidade);
            $('#valorp').val(data.valor);
        })
        $('#staticBackdrop').modal('show');
    });
    $('.btn-close').click(function () {$('#id').val("");})
    $('#cancel').click(function () {$('#idel').val("");$('#modaldelete').modal('hide');})
    $('#createp').click(function (e) {
        e.preventDefault();
        frm=$('#modalCreate');
        if (($('#nome').val()!='')&&($('#descricao').val()!='')&&($('#quant').val()!='')&&($('#valor').val()!='')){
            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                dataType: 'json',
                success: function (i) {
                    table.draw();
                    if ($('#id').val()=='') {
                        $('#modalCreate').trigger('reset');
                        $('#info').html('<div class="alert alert-success" role="alert"><strong>'+i['nome']+'</strong> cadastrado com sucesso</div>');
                    }else{
                        $('#id').val("");
                        $('#staticBackdrop').modal('hide');
                    }
                },
                error:function () {
                    $('#info').html('<div class="alert alert-danger" role="alert"><strong>Erro interno no servidor</strong></div>');
                }
            });
        }else{
            $('#info').html('<div class="alert alert-danger" role="alert"><strong>Preencha todos os dados</strong></div>');
        }
    });
    $('body').on('click','.delete', function () {
        console.log($(this).data('id'));
        $('#idel').val($(this).data('id'));
        $('#modaldelete').modal('show');
    });
    $('#deletep').click(function (e) {
        e.preventDefault();
        frm=$('.formd');
        $.ajax({
            type: "post",
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                table.draw();
                $('#modaldelete').modal('hide');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});