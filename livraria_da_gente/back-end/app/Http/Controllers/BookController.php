<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        return Auth::user()->livros()->get()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Image validation
        $image = '';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $imageRequest = $request->image;

            $extension = $imageRequest->extension();
            // Para evitar de nomes colidirem no banco o nome da imagem é alterado
            $imageName = md5($imageRequest->getClientOriginalName() . strtotime("now")) . "." . $extension; 
            $image = $imageName;

            // Coloca a imagem na pasta capasLivro
            $imageRequest->move(public_path('img/capasLivro'), $imageName);
        }

       return Livro::create([
            'titulo'=>$request->titulo,
            'autor'=>$request->autor,
            'genero'=>$request->genero,
            'subtitulo'=>$request->subtitulo,
            'edicao'=>$request->edicao,
            'valor'=>$request->valor,
            'isbn'=>$request->isbn,
            'estado'=>$request->estado,
            'user_id'=> Auth::user()->id,
            'image' => $image
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        if($livro->user_id != Auth::user()->id){
            return response('', 403);
        }
        //
        return $livro->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
    
        if($livro->user_id != Auth::user()->id){
            return response('', 403);
        }

        // Image validation
        $image = '';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $imageRequest = $request->image;

            $extension = $imageRequest->extension();
            // Para evitar de nomes colidirem no banco o nome da imagem é alterado
            $imageName = md5($imageRequest->getClientOriginalName() . strtotime("now")) . "." . $extension; 
            $image = $imageName;

            // Coloca a imagem na pasta capasLivro
            $imageRequest->move(public_path('img/capasLivro'), $imageName);
        }

        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->genero = $request->genero;
        $livro->subtitulo = $request->subtitulo;
        $livro->edicao = $request->edicao;
        $livro->valor = $request->valor;
        $livro->isbn = $request->isbn;
        $livro->estado = $request->estado;
        $livro->image = $image;
        $livro->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        //
        if($livro->user_id != Auth::user()->id){
            return response('', 403);
        }

        $livro->delete();
    }
}
