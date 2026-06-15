<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Lista de Cursos';
    }

    public function create()
    {
        return view('cursos.create', ['titulo' => 'Cadastro de Curso']);
    }

    public function listagem()
    {
        $cursos = [
            'Laravel Básico',
            'PHP Avançado',
            'JavaScript Moderno',
        ];

        return view('cursos.listagem', compact('cursos'));
    }

    public function show($id)
    {
        // O parâmetro {id} da rota é passado automaticamente para este método.
        return "Curso selecionado: ID {$id}";
    }
}
