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

Route::get('/', function () {
    return view('welcome');
});

// ----------- INTRODUCACAO A ROTAS -------------//

// metodo get permite ter acesso aos dados da rota via url
Route::get('/empresa', function () {
    return view('site/empresa');
});

Route::get('/ujc', function () {
    return view('site/ujc');
});


//  metodo any Permite qualquer tipo de acesso http (put, delete, get, post); mas nao ee seguro
Route::any('/acessoTotal', function () {
    return "Permite qualquer tipo de acesso http";
});

//  metodo match Permite apenas tipo de acesso http definidos como parametro (put, delete, get, post)
Route::match(['get', 'post'], '/definidos', function () {
    return "Permite acessos http definidos";
});


// passagem de parametros

Route::get('/estudante/{id}/{curso}', function ($nrEstudante, $curso) {
    return "O numero de estudante ee: $nrEstudante <br>" . "O curso dele ee $curso";
});

// Route::get('/estudante/{id}/{curso}', function ($nrEstudante = '', $curso = '') {
//     return "O numero de estudante ee: $nrEstudante <br>". "O curso dele ee $curso" ;
// });
// Podemos atribuir valores default nos parametros para que caso nao seja passados pelo parametros a aplicacao nao de erro 404
// seguindo o exemplo comentado.


// ---------------- REDIRECIONAMENTOS E VIEW------//

// neste caso ao requisitar a rota sobre ele vai nos redirecionar a rota empresa
Route::get('/sobre', function () {
    return redirect('/empresa');
});

// mas podemos tambem fazer o redirecionamento da seguinte maneira sem usar a funcao de callback

Route::redirect('/about', '/ujc');
// quando queremos rederizar uma view apenas podemos usar esse modelo 
// Route::view('/empresa', '/site/empresa');


// ---------------- Rotas nomeadas -------------------//
// O uso de nomes nas rotas e bom ou ee importante pois quando usamos o redirecionamento com o nome da rota por mais que a rota mude com o tempo se o nome ainda for o mesmo nos poderemos ter a acesso a nova rota

Route::get('/news', function () {
    return view('news');
})->name('noticias');

Route::get('/novidades', function () {
    return redirect()->route('noticias');
});


// ------------------- Grupo de Rotas---------------------//

// Route::get('admin/dashbord', function () {
//     return 'dashbord';
// });

// Route::get('admin/users', function () {
//     return 'users';
// });

// Route::get('admin/clientes', function () {
//     return 'clientes';
// });

// temos as rotas acima com uma repeticao "admin" no inicio da rota entao para esses casos nos podemos optimizar o codigo jogando essas rotas num grupo com prefixo admin

Route::prefix('admin')->group(function () {

    Route::get('dashbord', function () {
        return 'dashbord';
    });

    Route::get('users', function () {
        return 'users';
    });

    Route::get('clientes', function () {
        return 'clientes';
    });
});


// Mas para alem de arupar pela rota em caso de termos rotas nomeadas podemos agrupar pelos nomes

// Route::name('estudante.')->group(function () {

//     Route::get('estudante/notas', function () {
//         return 'Notas';
//     })->name('notas');

//     Route::get('estudante/disciplinas', function () {
//         return 'Disciplinas';
//     })->name('disciplinas');

//     Route::get('estudante/faltas', function () {
//         return 'Faltas';
//     })->name('faltas');
// });
// // Teste
// Route::get('/h', function () {
//     return redirect()->route('estudante.faltas');
// });


// EE possivel agrupar por name e prefixo ao mesmo tempo tambem


Route::group([
    'prefix' => 'estudante',  //informando o prefixo do grupo
    'as' => 'estudante.'  //informando o none do grupo && a chave para o name no goup ee "as" 
], function () {

    Route::get('notas', function () {
        return 'Notas';
    })->name('notas');

    Route::get('disciplinas', function () {
        return 'Disciplinas';
    })->name('disciplinas');

    Route::get('faltas', function () {
        return 'Faltas';
    })->name('faltas');
});
// Teste do name
Route::get('/h', function () {
    return redirect()->route('estudante.faltas');
});