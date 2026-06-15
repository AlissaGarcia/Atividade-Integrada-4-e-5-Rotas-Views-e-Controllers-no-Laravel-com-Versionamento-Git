<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function empresa()
    {
        return 'Página da Empresa';
    }

    public function servicos()
    {
        return view('servicos');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function blog()
    {
        return view('blog');
    }

    // Erro proposital: se a rota /equipe existir sem este método,
    // o Laravel retornará um erro de método inexistente no controller.
    public function equipe()
    {
        return view('equipe');
    }
}
