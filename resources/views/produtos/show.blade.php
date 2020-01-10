<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$produto->titulo}}</title>
</head>
<body>
    <h1>{{$produto->titulo}}</h1>
</body>
    <h1>Produto: {{$produto->titulo}}</h1>
    <ul>
        <li>Referência: {{$produto->referencia}}</li>
        <li>Preço: R$ {{$produto->preco}}</li>
        <li>Adicionado em: {{$produto->created_at}}</li>
        <p>{{$produto->descricao}}</p>
    </ul>
    <a href="javascript:history.go(-1)">Voltar</a>
</html>