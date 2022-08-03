<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return 'Hello K!!';
// });

// Route::get('/sobre-nos', function () {
//     return 'Sobre nós.';
// });

// Route::get('/contato', function () {
//     return 'Contatos.';
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('site.index');
Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

//Route::redirect('/rota2', 'rota1');

// Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
//     function(
//         string $nome = 'Não informado',
//         string $categoria = 'Sem categoria',
//         string $assunto = 'Sem assunto',
//         string $mensagem = 'Mensagem não informada.') {
//     echo "
//         Nome: $nome <br>
//         Categoria: $categoria <br>
//         Assunto: $assunto <br>
//         Mensagem: $mensagem
//     ";
// });

// Route::get(
//         '/contato/{nome}/{categoria_id}',
//     function(
//         string $nome = 'Não informado',
//         int $categoria_id = 1 // Sem informação
//     ) {
//     echo "Nome: $nome <br> Categoria: $categoria_id <br>";
//     }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-ZA-z]+');
