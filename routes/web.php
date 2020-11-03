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
    return view('pages.acceuil');
});

Route::get('dashboard', function () {
    return view('Dashboard.index');
});




// Route::get('deux', function () {
//     return view('pages.album');
// });





                 //partie acteur
Route::get('form_acteur', 'ActeurController@create')->name('form_acteur');
Route::post('form_acteur', 'ActeurController@store')->name('enregistrer_acteur');
Route::get('acteur_liste', 'ActeurController@liste')->name('acteur_liste');
Route::get('acteur_detail/{id}' , 'ActeurController@show')->name('acteur_detail');
Route::get('acteur_modifier/{id}' , 'ActeurController@edit')->name('acteur_modifier');
Route::post('acteur_modifier/{id}' , 'ActeurController@update')->name('acteur_modifier');
Route::get('acteur_delete/{id}', 'ActeurController@destroy')->name('acteur_delete');
                
//partie actualité
Route::get('form_actualite', 'actualiteController@create')->name('form_actualite');
Route::post('form_actualite', 'ActualiteController@store')->name('enregistrer_actualite');
Route::get('actualite_liste', 'ActualiteController@liste')->name('actualite_liste');
Route::get('actualite_detail/{id}' , 'ActualiteController@show')->name('actualite_detail');
Route::get('actualite_modifier/{id}' , 'ActualiteController@edit')->name('actualite_modifier');
Route::post('actualite_modifier/{id}' , 'ActualiteController@update')->name('actualite_modifier');
Route::get('actualite_delete/{id}', 'ActualiteController@destroy')->name('actualite_delete');

//Partie spectacle
Route::get('form_spectacle', 'SpectacleController@create')->name('form_spectacle');
Route::post('form_spectacle', 'SpectacleController@store')->name('enregistrer_spectacle');
Route::get('spectacle_liste', 'SpectacleController@liste')->name('spectacle_liste');
Route::get('spectacle_detail/{id}' , 'SpectacleController@show')->name('spectacle_detail');
Route::get('spectacle_modifier/{id}' , 'SpectacleController@edit')->name('actualite_modifier');
Route::post('spectacle_modifier/{id}' , 'SpectacleController@update')->name('spectacle_modifier');
Route::get('spectacle_delete/{id}', 'SpectacleController@destroy')->name('spectacle_delete');


//Partie album
Route::get('form_album', 'AlbumController@create')->name('form_album');
Route::post('form_album', 'AlbumController@store')->name('enregistrer_album');
Route::get('album_liste', 'AlbumController@liste')->name('album_liste');
Route::get('album_detail/{id}' , 'AlbumController@show')->name('album_detail');
Route::get('album_modifier/{id}' , 'AlbumController@edit')->name('album_modifier');
Route::post('album_modifier/{id}' , 'AlbumController@update')->name('album_modifier');
Route::get('album_delete/{id}', 'AlbumController@destroy')->name('album_delete');


// Patie Affiche
Route::get('album','AlbumController@affiche')->name('album');
Route::get('event','SpectacleController@affiche')->name('event');
Route::get('actualite','ActualiteController@affiche')->name('actualite');