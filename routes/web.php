<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "HomeController@view");
Route::get('/home/notizie', "HomeController@notizie");
Route::get('/howtodon', function () {
    return view('howToDonate');
});
Route::get('/whattodon', function () {
    return view('whatToDonate');
});
Route::get('/locali', function () {
    return view('locali');
});

Route::get('/login', "LoginController@login");
Route::get('/logout', "LoginController@logout");
Route::post('login/don', "LoginController@checkLogin");
Route::post('login/pers', "LoginController@checkLoginPers");

Route::get('/register', "RegisterController@view");
Route::post('/register', "RegisterController@create");
Route::get('/register/cf/{q}', "RegisterController@checkCf");
Route::get('/register/mail/{q}', "RegisterController@checkMail");

Route::get('/donatori', "DonorController@view");
Route::get('donatori/donazioni', "DonorController@donazioni");
Route::get('donatori/prenotazione', "DonorController@vediPren");
Route::get('donatori/eff_pren', "DonorController@effPren");
Route::post('/donatori/effPren', "DonorController@prenota");
Route::post('/donatori/mod_dati', "DonorController@modDati");

Route::get("/personale", "PersController@view");
Route::get("personale/orari", "PersController@orari");
Route::get("personale/ricerca/{q}", "PersController@ricerca");
Route::post("personale/carica", "PersController@carica");

