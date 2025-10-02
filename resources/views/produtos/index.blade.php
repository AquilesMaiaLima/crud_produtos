<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>listagem de produtos</h1>
    <ul>
        @foreach($produtos as $produto)
            <li>{{ $produto->nome }} - R$ {{ $produto->valor }}</li>
        @endforeach
    </ul>
</body>
</html>