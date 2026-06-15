<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="/produtos" method="POST">
        @csrf
        <label for="nome">Nome do produto:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
