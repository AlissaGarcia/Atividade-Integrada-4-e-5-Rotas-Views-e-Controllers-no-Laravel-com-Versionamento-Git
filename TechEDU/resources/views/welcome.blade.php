<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roteiro de Rotas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f8; margin: 0; padding: 24px; }
        main { max-width: 900px; margin: auto; background: white; padding: 24px; border-radius: 12px; box-shadow: 0 12px 28px rgba(0,0,0,0.08); }
        h1 { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        table th, table td { text-align: left; padding: 12px 10px; border: 1px solid #ddd; }
        table th { background: #f0f0f8; }
        .note { margin-top: 16px; color: #555; }
        .route { font-family: monospace; }
    </style>
</head>
<body>
    <main>
        <h1>Rotas disponíveis</h1>
        <p>Ao abrir o projeto em <strong>http://127.0.0.1:8080</strong> ou na porta configurada, esta página lista todas as rotas implementadas e o que elas retornam.</p>

        <table>
            <thead>
                <tr>
                    <th>Método</th>
                    <th>Rota</th>
                    <th>O que retorna / faz</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>GET</td><td class="route">/</td><td>Esta página inicial com a lista de rotas</td></tr>
                <tr><td>GET</td><td class="route">/empresa</td><td>Texto: Página da Empresa</td></tr>
                <tr><td>GET</td><td class="route">/servicos</td><td>View `servicos`</td></tr>
                <tr><td>GET</td><td class="route">/portfolio</td><td>View `portfolio`</td></tr>
                <tr><td>GET</td><td class="route">/blog</td><td>View `blog`</td></tr>
                <tr><td>GET</td><td class="route">/equipe</td><td>View `equipe`</td></tr>
                <tr><td>GET</td><td class="route">/usuario/{nome}</td><td>Texto: Usuário: nome_informado</td></tr>
                <tr><td>GET</td><td class="route">/cursos</td><td>Texto: Lista de Cursos</td></tr>
                <tr><td>GET</td><td class="route">/cursos/novo</td><td>Formulário de cadastro de curso (view `cursos.create`)</td></tr>
                <tr><td>GET</td><td class="route">/cursos/listagem</td><td>View `cursos.listagem` com lista de cursos</td></tr>
                <tr><td>GET</td><td class="route">/curso/{id}</td><td>Texto: Curso selecionado: ID X</td></tr>
                <tr><td>GET</td><td class="route">/produtos/create</td><td>Formulário de cadastro de produto</td></tr>
                <tr><td>POST</td><td class="route">/produtos</td><td>Processa cadastro e mostra produto cadastrado</td></tr>
                <tr><td>GET</td><td class="route">/disciplinas</td><td>View `disciplinas.index` listando disciplinas</td></tr>
                <tr><td>GET</td><td class="route">/disciplinas/create</td><td>Formulário de cadastro de disciplina</td></tr>
                <tr><td>POST</td><td class="route">/disciplinas</td><td>Processa cadastro e mostra disciplina cadastrada</td></tr>
                <tr><td>GET</td><td class="route">/disciplinas/{id}</td><td>Texto: Disciplina selecionada: ID X - nome</td></tr>
                <tr><td>GET</td><td class="route">/alunos</td><td>View `alunos.index` listando alunos</td></tr>
                <tr><td>GET</td><td class="route">/alunos/create</td><td>Formulário de cadastro de aluno</td></tr>
                <tr><td>POST</td><td class="route">/alunos</td><td>Processa cadastro e mostra aluno cadastrado</td></tr>
                <tr><td>GET</td><td class="route">/alunos/{aluno}</td><td>View `alunos.show` exibindo aluno por ID</td></tr>
            </tbody>
        </table>

        <p class="note">Observação: para as rotas POST, use formulários ou ferramentas como Postman/Insomnia.</p>
    </main>
</body>
</html>
