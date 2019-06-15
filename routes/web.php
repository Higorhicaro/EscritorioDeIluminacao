<?php

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
    $representantes = App\Representante::all();
    return view('welcome', compact(['representantes']));
});
Route::get('/portfolio', function () {
    $produtos = App\Produto::all();
    return view('portfolio', compact(['produtos']));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
