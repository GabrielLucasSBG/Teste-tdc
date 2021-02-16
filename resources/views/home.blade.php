@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="cardGabriel">
    @if (Auth::guest())
    <div class="panel-heading">Bem vindo</div>

    <div class="panel-body">
        Faça o login
    </div>
    @else
    <h1 class="display-3 h1">Bem vindo, {{ Auth::user()->name }}</h1>

    <div class="panel-body">
        Você está logado!
        <br>
        <a class="buttons btn-tdc" href="{{ route('produtos.index') }}">Produtos</a>
    </div>
</div>
@endif

@endsection