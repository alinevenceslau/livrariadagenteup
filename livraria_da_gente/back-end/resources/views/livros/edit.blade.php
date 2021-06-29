<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria da Gente</title>
</head>

<body>
    <form action="{{ route('alterar', ['id' => $livro->id]) }}" method="GET">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome:</label>
                <input type="text" name="titulo" class="form-control" value="{{ $livro->titulo }}">
            </div>
            <div class="form-group col-md-6">
                <label>Subtítulo:</label>
                <input type="text" name="subtitulo" class="form-control" value="{{ $livro->subtitulo }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Autor:</label>
                <input name="autor" class="form-control" id="inputPassword5" value="{{ $livro->autor }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ISBN:</label>
                <input name="isbn" class="form-control" value="{{ $livro->isbn }}">
            </div>
            <div class="form-group col-md-6">
                <label>Edição:</label>
                <input name="edicao" type="number" min="1" max="999" class="form-control" value="{{ $livro->edicao }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Gênero:</label>

                <select name="genero" class="form-control" required>
                    <option value="Ação" <?= ($livro->genero == 'Ação') ? 'selected' : '' ?>>Ação</option>
                    <option value="Ficção" <?= ($livro->genero == 'Ficção') ? 'selected' : '' ?>>Ficção</option>
                    <option value="Aventura" <?= ($livro->genero == 'Aventura') ? 'selected' : '' ?>>Aventura</option>
                    <option value="Romance" <?= ($livro->genero == 'Romance') ? 'selected' : '' ?>>Romance</option>
                    <option value="Biografia" <?= ($livro->genero == 'Biografia') ? 'selected' : '' ?>>Biografia</option>
                    <option value="HQ/Mangá" <?= ($livro->genero == 'HQ/Mangá') ? 'selected' : '' ?>>HQ/Mangá</option>
                    <option value="Didáticos" <?= ($livro->genero == 'Didáticos') ? 'selected' : '' ?>>Didáticos</option>
                    <option value="Literatura Brasileira" <?= ($livro->genero == 'Literatura Brasileira') ? 'selected' : '' ?>>Literatura Brasileira</option>
                    <option value="Poesia" <?= ($livro->genero == 'Poesia') ? 'selected' : '' ?>>Poesia</option>
                    <option value="Literatura Estrangeira" <?= ($livro->genero == 'Literatura Estrangeira') ? 'selected' : '' ?>>Literatura Estrangeira</option>
                    <option value="Terror" <?= ($livro->genero == 'Terror') ? 'selected' : '' ?>>Terror</option>
                    <option value="Outros" <?= ($livro->genero == 'Outros') ? 'selected' : '' ?>>Outros</option>
                </select>


            </div>

            <div class="form-group col-md-6">
                <label>Estado:</label>
                <select name="estado" class="form-control" value="{{ $livro->estado }}">
                    <option value="estado" disabled selected>Escolha uma opção...</option>
                    <option value="Novo" <?= ($livro->estado == 'Novo') ? 'selected' : '' ?>>Novo</option>
                    <option value="Conservado" <?= ($livro->estado == 'Conservado') ? 'selected' : '' ?>>Usado</option>
                    <option value="Usado" <?= ($livro->estado == 'Usado') ? 'selected' : '' ?>>Desgastado</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label>Valor:</label>
                <input name="valor" type="number" min="1" max="999" class="form-control" value="{{ $livro->valor }}">
            </div>
        </div>
        <button>Salvar</button>
    </form>
</body>

</html>