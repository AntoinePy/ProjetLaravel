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
    return view('accueil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/saisieUtilisateur','SaisieUtilisateurController@create')->name('saisieUtilisateur');

Route::get('/statistiques','StatistiquesController@create')->name('statistiques');

Route::get('/profil','ProfilController@create')->name('profil');
Route::get('/profil/{user}/edit','ProfilController@edit')->name('profiledit');
Route::put('/profil/{user}/update', 'ProfilController@update')->name('profilupdate');

Route::get('/donneesInstallation', 'DonneesInstallationController@create')->name('donneesInstallation');
Route::get('/donneesInstallation/insert', 'DonneesInstallationController@insert')->name('insert');
Route::post('/donneesInstallation/insertDonnees','DonneesInstallationController@insertDonnees')->name('insertDonnees');
