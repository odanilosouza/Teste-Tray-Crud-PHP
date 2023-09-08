@extends('app')

@section('content')
    <h1>Vendas de {{ $vendedor->nome }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Comissão</th>
                <th>Valor da Venda</th>
                <th>Data da Venda</th>
            </tr>
        </thead>
        <tbody>

            @if (!empty($vendas))

                @foreach ($vendas as $venda)
                    <tr>
                        <td>{{ $venda->id }}</td>
                        <td>{{ $venda->vendedor->nome }}</td>
                        <td>{{ $venda->vendedor->email }}</td>
                        <td>{{ $venda->calcularComissaoFixa($venda->valor) }}</td>
                        <td>{{ $venda->valor }}</td>
                        <td>{{ $venda->created_at }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td> Não existe vendas! </td>
                </tr>
            @endif

        </tbody>

    </table>
    <br/>

    <a href="/vendedores/<?php echo $vendedor->id; ?>/cadastrar_venda">Cadastrar</a>

@endsection
