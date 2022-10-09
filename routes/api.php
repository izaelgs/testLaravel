<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function(){
    return ['mensagem' => 'ela sai eu boto calsinha'];
});


// Projetos

Route::namespace('App\Http\Controllers\Api')->group(function() {

    Route::post('/Login', 'Auth\LoginJwtController@login')->name('login');
    Route::get('/Logout', 'Auth\LoginJwtController@login')->name('logout');

    Route::prefix('projeto')->group(function() {
        Route::get('/', 'ProjetoController@index');
        Route::get('/{id}', 'ProjetoController@show');
    });

    Route::resource('/estudante', 'EstudanteController');
    Route::resource('/colaborador', 'ColaboradorController');



    // Login Required
    Route::group(['middleware' => ['jwt.auth']], function() {

        Route::resource('/user', 'UserController');

        Route::resource('/areaAP', 'AreaAtuacaoProjetoController');

        Route::prefix('projeto')->group(function() {
            Route::get('/{id}/estudantes', 'ProjetoController@estudantes');
            Route::get('/{id}/colaboradoes', 'ProjetoController@colaboradoes');
            Route::post('/', 'ProjetoController@save');
            Route::put('/{id}', 'ProjetoController@update')->middleware('auth.basic');
        });

        Route::resource('/curso', 'CursoController');
    });
});
