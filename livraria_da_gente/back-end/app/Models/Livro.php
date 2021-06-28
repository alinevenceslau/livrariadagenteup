<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'autor', 'genero', 'subtitulo', 'edicao', 'valor', 'isbn', 'estado', 'user_id'];
    protected $table = "livro";
}
