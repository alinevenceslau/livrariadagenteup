<?php

namespace App\Http\Controllers;

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

        header( "refresh:3;url=/home" );
        return "Livro cadastrado com sucesso!";
    }

    public function show()
    {
        return view('livros.show');
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.edit', ['livro'=> $livro]);
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
        
        header( "refresh:3;url=/verLivros" );
        return "Livro atualizado com sucesso!";
    }

    public function delete($id)
    {
        $livro = Livro::find($id);
        $livro->delete();
        header( "refresh:3;url=/verLivros" );
        return "Livro deletado com sucesso!";
    }
}
