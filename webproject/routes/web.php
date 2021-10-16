<?php
namespace App;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('consoles', [ProdutosController:: class, 'consoles']);
Route::get('jogos', [ProdutosController:: class, 'jogos']);
Route::get('acessorios', [ProdutosController:: class, 'acessorios']);
Route::post('consoles', [ProdutosController:: class, 'insert']);
Route::get('consoles/delete/{CodConsole}', [ProdutosController:: class, 'delete']);
Route::get('consoles/edit/{CodConsole}', [ProdutosController:: class, 'edit']);
Route::get('consoles/addcar/{CodConsole}', [ProdutosController:: class, 'addcar']);
Route::post('consoles/edit/{CodConsole}', [ProdutosController:: class, 'update']);
Route::post('consoles/addcar/{CodConsole}', [ProdutosController:: class, 'compra']);

//Route::get('/index', [ProdutosController:: class, 'index']);

//Route::view('/index', 'index');


//Request $request
Route::get('/', function () {
    return view('index');
});
