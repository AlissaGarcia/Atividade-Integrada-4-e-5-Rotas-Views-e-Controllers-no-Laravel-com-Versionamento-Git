<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = [
            ['id' => 1, 'nome' => 'Matemática'],
            ['id' => 2, 'nome' => 'História'],
            ['id' => 3, 'nome' => 'Física'],
        ];

        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Disciplina cadastrada: {$nome}";
    }

    public function show($id)
    {
        $disciplinas = [
            1 => 'Matemática',
            2 => 'História',
            3 => 'Física',
        ];

        $nome = $disciplinas[$id] ?? 'Não encontrada';
        return "Disciplina selecionada: ID {$id} - {$nome}";
    }
}
