@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1 class="titulo-paginas">Editar produto</h1>
			<div class="card-produtos">
				<form class="form" action="{{ route('produtos.update', $detailpage->id) }}" method="POST">
					<input class="form-control input-md" type="text" name="nome_produto" value="{{ $detailpage->nome_produto }}" placeholder="Nome do produto">
					{{ ($errors->has('nome_produto')) ? $errors->first('nome_produto') : '' }}<br>
					<div class="form-group">
						<select name="nome_usuario" class="form-control input-md">
							<option value="">Selecione um novo usuário</option>
							@foreach (\App\models\User::all() as $user)
							<option value="{{ $user->name }}">{{ $user->name }}</option>
							@endforeach
						</select>
					</div>
					<textarea class="form-control input-md" name="descricao" rows="8" cols="40" placeholder="Descricao">{{ $detailpage->descricao }}</textarea>
					{{ ($errors->has('descricao')) ? $errors->first('descricao') : '' }}<br>
					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input class="btn-tdc buttons" type="submit" name="name" value="Salvar">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection