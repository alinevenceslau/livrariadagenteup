@extends('layouts.app')

@section('content')
<?php

use App\Models\Livro;

$livros = Livro::where('user_id', auth()->user()->id)->get();

?>
<?php foreach ($livros as $livro) :
    $nome_livro = $livro['titulo'];
    $autor_livro = $livro['autor'];
    $subtitulo_livro = $livro['subtitulo'];
    $id_livro = $livro['id'];
?>
    <div class="col-md-3 mb-4">
        <div class="card rounded">
            <div class="card-image pt-3">
                <!-- <img class="img-fluid" src="../img/capaLivro.png" alt="Capa do Livro" /> -->
            </div>
            <div class="card-body text-center">
                <div class="mb-3">
                    <h4><?= $nome_livro ?></h4>
                    <h5 class="text-muted"><i><?= $autor_livro ?></i></h5>
                </div>
                <div class="btn-group" role="group">
                    <a href='/deleteLivros/<?= $id_livro ?>' class="btn-lg btn-outline-primary excluir mr-2">Excluir Livro</a>
                    <a href="/editarLivros/<?= $id_livro ?> " class="btn-lg btn-outline-primary editar mr-2">Editar Livro</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
@endsection