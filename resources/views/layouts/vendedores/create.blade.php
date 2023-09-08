@extends('app')

@section('content')
    <h1>Criar Novo Vendedor</h1>

    <form method="POST" action="/vendedores">
        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <br/>

        <button type="submit" class="btn btn-primary">Cadastrar </button>
    </form>
@endsection
