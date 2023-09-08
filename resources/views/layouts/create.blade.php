<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Vendedor</title>
</head>
<body>
    <h1>Cadastrar Vendedor</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/vendedores/store">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
