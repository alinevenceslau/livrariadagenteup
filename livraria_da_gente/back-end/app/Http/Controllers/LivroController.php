<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        Livro::create([
            'titulo' => $request->titulo,
            'autor' =>$request->autor,
            'genero' =>$request->genero,
            'subtitulo' =>$request->subtitulo,
            'edicao' =>$request->edicao,
            'valor' =>$request->valor,
            'isbn' =>$request->isbn,
            'estado' =>$request->estado,
            'user_id' => auth()->user()->id,
        ]);

        header( "refresh:5;url=/home" );
        return "Livro cadastrado com sucesso!";
    }

    public function show()
    {
        // $livro = Livro::findOrFail($id) | , ['livro' => $livro];
        return view('livros.show');
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.show', ['livro' => $livro]);
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);

        $livro->update([
            'titulo' => $request->titulo,
            'autor' =>$request->autor,
            'genero' =>$request->genero,
            'subtitulo' =>$request->subtitulo,
            'edicao' =>$request->edicao,
            'valor' =>$request->valor,
            'isbn' =>$request->isbn,
            'estado' =>$request->estado,
            'user_id' => auth()->user()->id,
        ]);
        
        header( "refresh:5;url=/home" );
        return "Livro atualizado com sucesso!";
    }
}
