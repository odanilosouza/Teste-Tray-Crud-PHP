@extends('app')

@section('content')
    <h1>Lista de Vendedores</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->id }}</td>
                    <td>{{ $vendedor->nome }}</td>
                    <td>{{ $vendedor->email }}</td>
                    <td>
                        <a href="/vendedores/{{$vendedor->id}}/vendas"> Vendas</a>
                        <a href="/vendedores/{{$vendedor->id}}>/edit"> Editar</a>
                        <a href="/vendedores/{{$vendedor->id}}/delete"> Excluir</a>

                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    <a href="/vendedores/cadastrar"> Cadastrar </a>
@endsection
