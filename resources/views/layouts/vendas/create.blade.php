@extends('layouts.app') <!-- Estendendo o layout principal -->

@section('content') <!-- Preenchendo a seção 'content' -->
    <h1>Criar Nova Venda</h1>

    <form method="POST" action="/vendedores/{{ request('vendedorId') }}/vendas">
        @csrf <!-- Token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->

        <div class="form-group">
            <label for="nome">Valor da venda</label>
            <input type="text" class="form-control" id="valor" name="valor" required>
        </div>
        <div class="form-group">
            <label for="nome">Data da Venda</label>
            <input type="date" class="form-control" id="data" name="data" required>
        </div>



        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
@endsection
