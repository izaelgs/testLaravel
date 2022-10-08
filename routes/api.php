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
    // $response = new \Illuminate\Http\Response(json_encode(['mensagem' => 'ela sai eu boto calsinha']));
    // $response->header('Content-Type', 'application/json');

    return ['mensagem' => 'ela sai eu boto calsinha'];
});


// Projetos

Route::namespace('App\Http\Controllers\Api')->group(function() {

    // Route::prefix('estudante')->group(function() {
        //     Route::resource('/', 'EstudanteController');
        // });

    Route::resource('/user', 'UserController');

    Route::resource('/areaAP', 'AreaAtuacaoProjetoController');

    Route::prefix('projeto')->group(function() {
        Route::get('/', 'ProjetoController@index');
        Route::get('/{id}', 'ProjetoController@show');
        Route::post('/', 'ProjetoController@save');
        Route::put('/', 'ProjetoController@update')->middleware('auth.basic');
    });

    Route::resource('/curso', 'CursoController');

    Route::resource('/estudante', 'EstudanteController');
    Route::resource('/colaborador', 'ColaboradorController');
});
