<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Anotacoes</title>
</head>
<body>
    <ul>
        @foreach($notas as $nota)
            <li>{{ $nota  }}</li>
        @endforeach
    </ul>
</body>
</html>
