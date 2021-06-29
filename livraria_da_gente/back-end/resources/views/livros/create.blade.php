@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<h2 class="h3 my-5 page-title text-center">Adicionar Livro</h2>
			<form action="{{ route('guardar') }}" method="POST">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nome:</label>
						<input type="text" name="titulo" class="form-control" placeholder="Jogos Vorazes" required>
					</div>
					<div class="form-group col-md-6">
						<label>Subtítulo:</label>
						<input type="text" name="subtitulo" class="form-control" placeholder="Em chamas" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Autor:</label>
						<input name="autor" class="form-control" id="inputPassword5" placeholder="Autor da Obra" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>ISBN:</label>
						<input name="isbn" class="form-control" placeholder="Apenas números">
					</div>
					<div class="form-group col-md-6">
						<label>Edição:</label>
						<input name="edicao" type="number" min="1" max="999" class="form-control" placeholder="Edição do Livro" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Gênero:</label>
						<select name="genero" class="form-control" required>
							<option value="genero" selected disabled>Escolha uma opção...</option>
							<option value="Ação">Ação</option>
							<option value="Ficção">Ficção</option>
							<option value="Aventura">Aventura</option>
							<option value="Romance">Romance</option>
							<option value="Biografia">Biografia</option>
							<option value="HQ/Mangá">HQ/Mangá</option>
							<option value="Didáticos">Didáticos</option>
							<option value="Literatura Brasileira">Literatura Brasileira</option>
							<option value="Poesia">Poesia</option>
							<option value="Literatura Estrangeira">Literatura Estrangeira</option>
							<option value="Terror">Terror</option>
							<option value="Outros">Outros</option>
						</select>
					</div>

					<div class="form-group col-md-6">
						<label>Estado:</label>
						<select name="estado" class="form-control" required>
							<option value="estado" disabled selected>Escolha uma opção...</option>
							<option value="Novo">Novo</option>
							<option value="Conservado">Usado</option>
							<option value="Usado">Desgastado</option>
						</select>
					</div>

					<div class="form-group col-md-6">
						<label>Valor:</label>
						<input name="valor" type="number" min="1" max="999" class="form-control" placeholder="Valor do Livro" required>
					</div>
				</div>
				<button class="btn btn-outline-primary">Adicionar Livro</button>
			</form>
		</div>
	</div>
	@endsection