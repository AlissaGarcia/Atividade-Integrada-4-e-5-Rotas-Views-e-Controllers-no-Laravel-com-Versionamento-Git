# Atividade Integrada 4 e 5 - Rotas, Views e Controllers no Laravel

## Aluno
- Alissa Garcia Moreira — 20242283000217

## Disciplina
- PWEB S4

## Executar o projeto localmente
1. Abra o terminal na pasta raiz do projeto.
2. Entre no diretório do Laravel:
   ```bash
   cd TechEDU
   ```
3. Instale as dependências (se necessário):
   ```bash
   composer install
   ```
4. Copie o arquivo de ambiente e gere a chave da aplicação:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Execute o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```
6. Acesse o projeto em `http://127.0.0.1:8000`.

## Rotas implementadas
| Método | Rota | Retorno / Comportamento |
|---|---|---|
| GET | `/` | View `welcome` |
| GET | `/empresa` | Texto `Página da Empresa` |
| GET | `/servicos` | View `servicos` |
| GET | `/portfolio` | View `portfolio` |
| GET | `/blog` | View `blog` |
| GET | `/equipe` | View `equipe` |
| GET | `/usuario/{nome}` | Texto `Usuário: nome_informado` |
| GET | `/cursos` | Texto `Lista de Cursos` |
| GET | `/cursos/novo` | View `cursos.create` com título `Cadastro de Curso` |
| GET | `/cursos/listagem` | View `cursos.listagem` exibindo lista de cursos |
| GET | `/curso/{id}` | Texto `Curso selecionado: ID X` |
| GET | `/produtos/create` | Formulário `produtos.create` |
| POST | `/produtos` | Texto `Produto cadastrado: nome_recebido` |
| GET | `/disciplinas` | View `disciplinas.index` com lista de disciplinas |
| GET | `/disciplinas/create` | Formulário `disciplinas.create` |
| POST | `/disciplinas` | Texto `Disciplina cadastrada: nome_recebido` |
| GET | `/disciplinas/{id}` | Texto `Disciplina selecionada: ID X - nome` |
| GET | `/alunos` | View `alunos.index` listando alunos |
| GET | `/alunos/create` | Formulário `alunos.create` |
| POST | `/alunos` | Texto `Aluno cadastrado: nome_recebido` |
| GET | `/alunos/{aluno}` | View `alunos.show` exibindo aluno por ID |
