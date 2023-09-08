@extends('layouts.app')

@section('content')
    <h1>Confirmar Exclusão</h1>
    <p>Tem certeza de que deseja excluir o vendedor {{ $vendedor->nome }}?</p>

    <form method="POST" action="{{ route('vendedores.delete', ['id' => $vendedor->id]) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Excluir</button>
        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
