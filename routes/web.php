<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos',[\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato',[App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function (){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {
Route::get('/clientes', function (){ return 'Clientes'; })->name('app.clientes');
Route::get('fornecedores','App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
Route::get('/produtos', function (){ return 'Produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function() {
    echo 'A rota sumiu <a href="/"> corre na outra';
});