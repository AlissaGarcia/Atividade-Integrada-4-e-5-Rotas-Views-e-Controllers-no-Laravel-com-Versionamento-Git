<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DisciplinaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', [PaginaController::class, 'empresa']);
Route::get('/servicos', [PaginaController::class, 'servicos']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);
Route::get('/blog', [PaginaController::class, 'blog']);

// Erro proposital: se o método equipe() não existir no PaginaController,
// o Laravel retorna "Method App\Http\Controllers\PaginaController::equipe does not exist".
Route::get('/equipe', [PaginaController::class, 'equipe']);

Route::get('/usuario/{nome}', function ($nome) {
    return "Usuário: {$nome}";
});

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);
Route::get('/curso/{id}', [CursoController::class, 'show']);

Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);

Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);
Route::post('/disciplinas', [DisciplinaController::class, 'store']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);
