@extends('layouts.app')

@section('content')
    <h1>Editar Vendedor</h1>

    <form method="POST" action="{{ route('vendedores.update', ['id' => $vendedor->id]) }}">
        @csrf
        @method('PUT') <!-- Especifica o método PUT -->

        <!-- Campo oculto para passar o ID -->
        <input type="hidden" name="id" value="{{ $vendedor->id }}">

        <!-- Outros campos do formulário -->
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $vendedor->nome }}" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $vendedor->email }}" required>
        </div>

        <!-- Outros campos do formulário -->

        <button type="submit" class="btn btn-primary">Atualizar Vendedor</button>
    </form>

@endsection
