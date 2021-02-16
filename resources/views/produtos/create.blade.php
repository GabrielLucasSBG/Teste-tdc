@extends('layouts.app')
@section('content')

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="titulo-paginas">Adicionar novo produto</h1>
			<div class="card-produtos">
				<form class="" action="{{ route('produtos.store') }}" method="POST">
					<div class="form-group">
						<div class="col-md-12">
							<input id="textinput" name="nome_produto" type="text" placeholder="Nome do Produto" class="form-control input-md">
							<span class="help-block">{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<select name="nome_usuario" class="form-control input-md">
								<option value="">Selecione um usuário</option>
								@foreach (\App\models\User::all() as $user)
								@if ($user->id == auth()->user()->id)
								<option value="{{ $user->name }}" selected>{{ auth()->user()->name }}</option>
								@else
								<option value="{{ $user->name }}">{{ $user->name }}</option>
								@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<textarea placeholder="Descrição" class="form-control" id="textarea" name="descricao"></textarea>
							<span class="help-block">{{ ($errors->has('descricao')) ? $errors->first('descricao') : '' }}</span>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input class="btn-tdc buttons" type="submit" name="name" value="Cadastrar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection