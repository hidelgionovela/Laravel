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
Route::get('/', function () {
        return view('welcome');
});

// Para listar usamos no laravel geralmente o metodo get e nos controlleres usamos a action index

/*Route::get('/listar', [MachinesController::class, 'index']);
// Para listar usamos no laravel geralmente o metodo get e nos controlleres usamos a action index 
// Mas podemos usar tambem o metodo show.
Route::get('/visualizar/{id}', [MachinesController::class, 'show']);
Route::get('/cadastrar', [MachinesController::class, 'create']);
Route::post('/cadastrar', [MachinesController::class, 'store']);
*/

// Para trabalhar com link's O padrao das rotas deve ser o seginte:
Route::resource('machines', MachinesController::class);
// Entao para acessar metodo index do MachinesController apenas escrevemos machines depois do barra e para acessar outros metodos machines.nomeMetodo.




