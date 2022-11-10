<?php

use App\Http\Controllers\MachinesController;
use App\Http\Controllers\produtoController;
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

// ---------------- Introducao aos Controlers ---------------------//

// ---------------- Controlers Resources ---------------------//

// criando uma rota para acessar os metodos do produtoController. 
Route::resource('produtos', produtoController::class);

// Para listar usamos no laravel geralmente o metodo get e nos controlleres usamos a action index

Route::get('/', function () {
        return view('welcome');
});

Route::get('/listar', [MachinesController::class, 'index']);

// Para listar usamos no laravel geralmente o metodo get e nos controlleres usamos a action index 
// Mas podemos usar tambem o metodo show.

Route::get('/visualizar/{id}', [MachinesController::class, 'show']);





