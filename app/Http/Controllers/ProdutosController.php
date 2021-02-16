<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos.index')->with("produtos", $produtos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_produto' => 'required',
            'descricao' => 'required',
            'nome_usuario' => 'required'
        ]);

        $produtos = new Produtos;
        $produtos->nome_produto = $request->nome_produto;
        $produtos->descricao = $request->descricao;
        $produtos->nome_usuario = $request->nome_usuario;
        $produtos->save();
        return redirect('produtos')->with('message', 'Produto criado com sucesso!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = Produtos::find($id);
        if (!$produtos) {
            abort(404);
        }
        return view('produtos.details')->with('detailpage', $produtos);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = Produtos::find($id);
        if (!$produtos) {
            abort(404);
        }
        return view('produtos.edit')->with('detailpage', $produtos);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome_produto' => 'required',
            'descricao' => 'required',
            'nome_usuario' => 'required'
        ]);

        $produtos = Produtos::find($id);
        $produtos->nome_produto = $request->nome_produto;
        $produtos->descricao = $request->descricao;
        $produtos->nome_usuario = $request->nome_usuario;
        $produtos->save();
        return redirect('produtos')->with('message', 'Produto editado com sucesso!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Produtos $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('message', 'Produto apagado com sucesso!');
    }
}
