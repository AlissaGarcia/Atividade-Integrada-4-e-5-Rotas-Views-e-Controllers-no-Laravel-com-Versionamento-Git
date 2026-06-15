<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Disciplina</title>
</head>
<body>
    <h1>Cadastrar Disciplina</h1>
    <form action="/disciplinas" method="POST">
        @csrf
        <label for="nome">Nome da disciplina:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
