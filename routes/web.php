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
Route::get('/saisieUtilisateur/insert','SaisieUtilisateurController@insert')->name('saisieInsert');
Route::post('/saisieUtilisateur/insertSaisie','SaisieUtilisateurController@insertSaisie')->name('insertSaisie');

Route::get('/statistiques','StatistiquesController@create')->name('statistiques');
Route::get('/statistiques/prodJourna','StatistiquesController@prodJourna')->name('prodJourna');
Route::get('/statistiques/prodMensuelle','StatistiquesController@prodMensuelle')->name('prodMensuelle');
Route::get('/statistiques/prodAnnuelle','StatistiquesController@prodAnnuelle')->name('prodAnnuelle');


Route::get('/profil','ProfilController@create')->name('profil');
Route::get('/profil/{user}/edit','ProfilController@edit')->name('profiledit');
Route::put('/profil/{user}/update', 'ProfilController@update')->name('profilupdate');

Route::get('/donneesInstallation', 'DonneesInstallationController@create')->name('donneesInstallation');
Route::get('/donneesInstallation/insert', 'DonneesInstallationController@insert')->name('insert');
Route::post('/donneesInstallation/insertDonnees','DonneesInstallationController@insertDonnees')->name('insertDonnees');
