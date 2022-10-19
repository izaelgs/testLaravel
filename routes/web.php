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
    return view('welcome',[
        'pagina' => 'app'
    ]);
});

Route::get('/estudante', function () {
    return view('estudante', [
        'pagina' => 'estudante'
    ]);
});

Route::get('/colaborador', function () {
    return view('colaborador', [
        'pagina' => 'colaborador'
    ]);
});

Route::get('/proponente', function () {
    return view('proponente', [
        'pagina' => 'proponente'
    ]);
});
