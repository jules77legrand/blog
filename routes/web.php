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

Route::get('/', function(){
    return view('home');
});

Route::get('/accueil/index','AccueilsController@index')->name('accueil.index');
Route::get('/apropos/about','AproposController@index')->name('apropos.about');
Route::get('/formation/liste','FormationController@show')->name('formation');
Route::get('/professeur/element','ProfesseurController@show')->name('Professeur');
Route::get('/Blog/etudiant','BlogController@show')->name('Blog');
Route::get('/Contact/adresse','ContactController@show')->name('Contact');


Route::get("/student/edit/{id}", "StudentController@edit")->name('editer_student');

Route::resource('etudiant', 'EtudiantController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


