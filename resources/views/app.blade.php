<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Minha Aplicação</title>
</head>
<body>

@section('header')
@show

<main>
    @yield('content')
    <style>
        /* Estilos para tabelas */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th, .table td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
}

/* Estilo de cabeçalho da tabela */
.table th {
    font-weight: bold;
    background-color: #f2f2f2;
}

/* Estilo de linhas alternadas (listras) */
.table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

/* Estilo de célula destacada (por exemplo, para realçar) */
.table .highlight {
    background-color: #ffeb3b; /* Amarelo */
}

/* Estilo de bordas arredondadas para a primeira e última célula da tabela */
.table th:first-child,
.table td:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.table th:last-child,
.table td:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
/* Estilos para tabelas */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th, .table td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
}

/* Estilo de cabeçalho da tabela */
.table th {
    font-weight: bold;
    background-color: #f2f2f2;
}

/* Estilo de linhas alternadas (listras) */
.table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

/* Estilo de célula destacada (por exemplo, para realçar) */
.table .highlight {
    background-color: #ffeb3b; /* Amarelo */
}

/* Estilo de bordas arredondadas para a primeira e última célula da tabela */
.table th:first-child,
.table td:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.table th:last-child,
.table td:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

/* Estilo base do botão */
a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    text-align: center;
    transition: background-color 0.3s ease;
}

/* Estilo do botão quando hover (passar o mouse) */
a:hover {
    background-color: #0056b3;
}

/* Estilo para a tag <h1> */
h1 {
    font-size: 36px;
    font-weight: bold;
    color: #333;
    margin-top: 20px;
    text-align: center;
    background-color: #007bff;

}

/* Estilos para o formulário */
form {
    width: 300px;
    margin: 0 auto;
}

/* Estilos para o rótulo (label) */
label {
    display: block; /* Faz com que os rótulos ocupem uma linha inteira */
    font-weight: bold;
    margin-bottom: 5px;
}

/* Estilos para os campos de entrada (input) */
input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 16px;
}

/* Estilos para o botão de envio */
button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}


    </style>
</main>

@section('footer')
@show


</body>
</html>

