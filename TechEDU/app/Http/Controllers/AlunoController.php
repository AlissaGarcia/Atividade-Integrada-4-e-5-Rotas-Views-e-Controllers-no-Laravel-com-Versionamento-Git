<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = [
            'João',
            'Maria',
            'Carlos',
        ];

        return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Aluno cadastrado: {$nome}";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alunos = [
            1 => 'João',
            2 => 'Maria',
            3 => 'Carlos',
        ];

        $nome = $alunos[$id] ?? 'Não encontrado';
        return view('alunos.show', compact('id', 'nome'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->route('alunos.show', ['aluno' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('alunos.show', ['aluno' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->route('alunos.index');
    }
}
