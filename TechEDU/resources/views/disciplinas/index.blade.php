<!DOCTYPE html>
<html>
<head>
    <title>Disciplinas</title>
</head>
<body>
    <h1>Disciplinas</h1>
    <ul>
        @foreach ($disciplinas as $disciplina)
            <li>{{ $disciplina['id'] }} - {{ $disciplina['nome'] }}</li>
        @endforeach
    </ul>
</body>
</html>
