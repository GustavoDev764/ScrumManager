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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", 'HomePageController@index')->name('homePage');

Route::get("/lista-funcionalidades/{id}", 'HomePageController@show')->name('sprintfunc');

Route::get("/editar-sprint/{id}", 'HomePageController@edit')->name('editesprint');

Route::put("/editar-sprint/{id}", 'HomePageController@update')->name('updatesprint');

Route::delete("/deleta-sprint/{id}", 'HomePageController@destroy')->name('deletesprint');

Route::get("/cria-sprint", 'HomePageController@viewCreated')->name('createsprint');

Route::post("/cria-sprint", 'HomePageController@create')->name('insertsprint');

//cadastra funcionalidae por dentro do sprint
Route::get("/cria-funcionalidade-sprint/{id}", 'HomePageController@viewCreatedFunctionalidade')->name('createfunctionalitysprint');
Route::post("/cria-funcionalidade-sprint/{id}", 'HomePageController@createFunctionalidade')->name('insertfunctionalitysprint');
Route::get("/editar-funcionalidade-sprint/{idsprint}/{idfunc}", 'HomePageController@editarViewFunctionalidade')->name('editarfunctionalitysprint');
Route::put("/editar-funcionalidade-sprint", 'HomePageController@updateFunctionalidade')->name('updatefunctionalitysprint');
Route::delete("/deleta-funcionalidade-sprint/{idsprint}/{idfunc}", 'HomePageController@deleteFunctionalidade')->name('deletafunctionalitysprint');
Route::get("/lista-funcionalidade-sem-sprint/{idsprint}", 'HomePageController@listaDeFunctionalidadeSemSprint')->name('listafunctionalitysemsprint');
Route::post("/add-funcionalidade-sem-sprint", 'HomePageController@addFunctionalidadeSemSprint')->name('addlistafunctionalitysemsprint');