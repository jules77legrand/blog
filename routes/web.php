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
//menu
Route::get('/accueil/index','AccueilsController@index')->name('accueil.index');
Route::get('/apropos/admission','AproposController@index')->name('admission');
Route::get('/formation/liste','FormationController@show')->name('formation');
Route::get('/professeur/element','ProfesseurController@show')->name('Professeur');
Route::get('/Blog/bloc','BlogController@show')->name('Blog');
Route::get('/Contact/adresse','ContactController@show')->name('Contact');



Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//conexion
Route::get('/connexion','ConnexionController@formulaire');
Route::post('/connexion','ConnexionController@traitement');
//filiere
Route::resource('filiere', 'FiliereController');
Route::get("/filiere/edit/{id}", "FiliereController@edit")->name('editer_filiere');
Route::patch("/filiere/edit/{id}", "FiliereController@update")->name('update_filiere');
Route::get('/filiiere','FiliereController@index')->name('filiere');

Route::delete('filiere/{id}', 'FiliereController@destroy');
Route::resource('filiere', 'FiliereController');


//etudiant
Route::resource('etudiant', 'EtudiantController');
Route::get('/etudiant','EtudiantController@index')->name('etudiant');
Route::get('/etudiant/create','EtudiantController@create')->name('etudiant_create');
Route::post('/etudiant/create','EtudiantController@store')->name('store_etudiant');
Route::get("/etudiant/edit/{id}", "EtudiantController@edit")->name('editer_etudiant');
Route::patch("/etudiant/edit/{id}", "EtudiantController@update")->name('update_etudiant');
Route::delete('etudiant/{id}', 'EtudiantController@destroy');



//bouton recherche

Route::get('/recherche','RechercheController@index');


