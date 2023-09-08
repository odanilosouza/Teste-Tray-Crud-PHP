@extends('layouts.app') <!-- Estendendo o layout principal -->

@section('content') <!-- Preenchendo a seção 'content' -->
    <h1>Criar Novo Vendedor</h1>

    <form method="POST" action="/vendedores/store">
        @csrf <!-- Token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Adicione mais campos do formulário conforme necessário -->

        <button type="submit" class="btn btn-primary">Criar Vendedor</button>
    </form>
@endsection
