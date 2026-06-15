<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    <form action="/alunos" method="POST">
        @csrf
        <label for="nome">Nome do aluno:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
