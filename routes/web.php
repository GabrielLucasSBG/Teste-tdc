<?php

use App\Http\Controllers\ProdutosController;
use App\Models\Produtos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*
Route::post('/produtos/delete', 'App\Http\Controllers\ProdutosController@destroy')->name('deletarProduto');

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index')->name('produtoInicio');

Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('criarProduto');

Route::get('/produtos/criar', 'App\Http\Controllers\ProdutosController@paginaProduto')->name('paginaCriarProdutos');
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('produtos', 'App\Http\Controllers\ProdutosController');