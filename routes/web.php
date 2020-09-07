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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::resource('annotation', 'AnnotationController');

Route::resource('fonction', 'FonctionController');

Route::resource('document', 'DocumentController');

Route::get('enregistrement-courriers', 'DocumentController@create')->name('enregistrement-courriers');

Route::get('enregistrement-utilisateurs', 'UserController@create')->name('enregistrement-utilisateurs');

Route::get('enregistrement-fonctions', 'FonctionController@create')->name('enregistrement-fonctions');