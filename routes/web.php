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
    return view('welcome');
});
Route::view('/testEmail', 'testEmail')->name('testEmail');
Route::view('/entreprise', 'entreprise')->name('entreprise');
Route::view('/service', 'service')->name('service');
// Route::view('/reservation', 'reservation')
Route::view('/contact', 'contact')->name('contact');
Route::get('Form-reservation/{id}', 'VoitureController@edit')->name('Form-reservation');

Route::get('/Form-reservation', 'ReservationController@create')->name('Form-reservation');

Route::post('save', 'ReservationController@store');
Route::get('/reservation', 'VoitureController@index')->name('reservation');

// Route::view('/Form-reservation', 'Form-reservation')->name('Form-reservation');
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::put('adminC/{id}', 'ReservationController@update');
    // Route::view('/adminC', 'adminC')->name('adminC');
    Route::delete('adminC/{id}', 'ReservationController@destroy');
    Route::get('/admin', 'VoitureController@listeVoiture')->name('admin');
    Route::any('/searchr', 'ReservationController@search')->name('searchr');
    Route::any('/search', 'VoitureController@search')->name('search');
    Route::any('/searchC', 'CategorieController@search')->name('searchC');
    Route::any('/searchS', 'ServiceController@search')->name('searchS');
  
Route::put('saveVoiture', 'VoitureController@update');
Route::post('saveVoiture', 'VoitureController@store');
Route::get('/AjoutVoiture', 'VoitureController@create')->name('AjoutVoiture');
Route::put('editVoiture/{id}', 'VoitureController@editVoiture')->name('editVoiture');
Route::delete('deleteVoiture/{id}', 'VoitureController@deleteVoiture')->name('deleteVoiture');
Route::get('/adminC', 'ReservationController@index')->name('adminC');
Route::get('/send/email', 'HomeController@mail');
});

Route::get('/CategorieListe', 'CategorieController@index')->name('CategorieListe');
Route::get('/AjoutCategorie', 'CategorieController@create')->name('AjoutCategorie');
Route::post('saveCategorie', 'CategorieController@store');
Route::put('editCategorie/{id}', 'CategorieController@editCategorie')->name('editCategorie');
Route::put('updateCategorie', 'CategorieController@update');
Route::delete('deleteCategorie/{id}', 'CategorieController@deleteCategorie')->name('deleteCategorie');


Route::get('/ListeVoiturePCatecogie', 'VoitureController@VoitureParCategorie')->name('ListeVoiturePCatecogie');

//service
Route::get('/ListeRendezVous', 'ServiceController@index')->name('ListeRendezVous');
Route::put('ListeRendezVous/{id}', 'ServiceController@update');
    // Route::view('/adminC', 'adminC')->name('adminC');
Route::delete('ListeRendezVous/{id}', 'ServiceController@destroy');
Route::get('/PrendreRendezVous', 'ServiceController@create')->name('PrendreRendezVous');
Route::post('enregistrer', 'ServiceController@store');