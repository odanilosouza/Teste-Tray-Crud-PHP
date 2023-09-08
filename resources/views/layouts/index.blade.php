@extends('layouts.app')

@section('content')
    <h1>Lista de Vendedores</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <!-- Outras colunas da sua tabela -->
            </tr>
        </thead>
        <tbody>
            @foreach ($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->id }}</td>
                    <td>{{ $vendedor->nome }}</td>
                    <td>{{ $vendedor->email }}</td>
                    <td>
                        <a href="/vendedores/<?php echo $vendedor->id; ?>/edit"> Editar</a>
                        <a href="/vendedores/<?php echo $vendedor->id; ?>/delete"> Excluir</a>

                    </td>
                    <!-- Outras colunas da sua tabela -->
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
