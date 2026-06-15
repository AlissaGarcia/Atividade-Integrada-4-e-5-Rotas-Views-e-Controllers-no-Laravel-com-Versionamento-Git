<!DOCTYPE html>
<html>
<head>
    <title>{{ $titulo }}</title>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    <!-- Formulário de exemplo simples criado apenas para demonstrar a estrutura -->
    <form action="#" method="POST">
        <label for="nome">Nome do curso:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome" required>

        <label for="carga_horaria">Carga horária:</label>
        <input type="number" id="carga_horaria" name="carga_horaria" placeholder="Horas" required>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
