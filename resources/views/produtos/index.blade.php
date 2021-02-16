@extends('layouts.app')

@section('content')


@auth
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="titulo-paginas">Produtos</h1>
            <p>{{ Session::get('message') }}</p>
            <div class="card-produtos">
                <table class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Nome
                            </th>
                            <th>
                                Descrição
                            </th>

                            <th>
                                Usuário
                            </th>
                            <th>
                                Editar
                            </th>
                            <th>
                                Deletar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>
                                {{ $produto -> id }}
                            </td>
                            <td>
                                {{ $produto -> nome_produto }}
                            </td>
                            <td>
                                {{ $produto -> descricao }}
                            </td>

                            <td>
                                {{ $produto -> nome_usuario }}
                            </td>

                            <td>
                                <a class="editar" href="{{ route('produtos.edit', $produto->id)}}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <a class="apagar">Apagar</a>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    <a class="btn-tdc buttons" href="{{ route('produtos.create') }}"> Criar novo Produto</a>
                </div>

            </div>
        </div>
    </div>
</div>

@endauth
@if (Auth::guest())
<div class="cardGabriel">
    <h1 class="titulo-paginas">Opa!</h1>
    <h3 class="titulo-paginas">Você não pode visualizar o conteúdo<br> enquanto não estiver em uma sessão, <br> faça o Login para prosseguir!</h3>
    <a class="btn-tdc buttons" href="{{ url('/home') }}">
        Inicio
    </a>
</div>
@endif
@endsection