<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes([
    'register' => false
]);

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('empresas', 'EmpresaController');
    Route::resource('produtos', 'ProdutosController');
    Route::resource('users', 'UsersController');
    Route::resource('movimentos_financeiros', 'MovimentoFinanceiroController')->except(['edit', 'update']);
    Route::resource('movimentos_estoque', 'MovimentoEstoqueController')->except(['edit', 'update']);
    Route::post('/empresas/buscar-por/nome', 'Selects\EmpresaNomeTipo');
    Route::post('/produtos/buscar-por/nome', 'Selects\ProdutoPorNome');

    Route::get('/empresas/relatorio/saldo/{empresa}', 'Relatorios\SaldoEmpresa')
        ->name('empresas.relatorios.saldo');
});
