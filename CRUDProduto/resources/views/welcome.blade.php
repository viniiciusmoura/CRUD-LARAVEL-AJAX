@extends('Layouts.header')

@section('inicio')
    <div class="container">
        <div class="p-2 mb-3 bg-secondary text-white">
            <h2>Lista de produtos</h2>
        </div>
        <div class="row">
            <div class="col-md-2 ms-md-auto">
                <button type="button" class="btn btn-success" id="btn-cadastrar">
                    <i class="bi bi-plus-lg"></i>
                    Adicionar produto
                  </button>
            </div>
        </div>
    
@endsection

    