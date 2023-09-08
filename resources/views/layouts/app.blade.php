<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem Vendedores</title>
</head>
<body>
<div class="container">
    <h1>Bem-vindo à Página Principal</h1>
    <p>Esta é a página principal do seu aplicativo.</p>
    <p>Registros de Vendedores:</p>

    <ul>
        @foreach ($vendedores as $vendedor)
            <li>{{ $vendedor->nome }} - {{ $vendedor->email }}</li>
        @endforeach
    </ul>
</div>


</body>
</html>
