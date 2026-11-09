<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('index');
});

Route::get('index', 'App\Http\Controllers\ControllerPrincipale@mostra_pagina');
Route::get('RestApi', 'App\Http\Controllers\ControllerPrincipale@mostra_api');

Route::get('news', 'App\Http\Controllers\ApiController@news');
Route::get('spotify/{autore}', 'App\Http\Controllers\ApiController@spotify');
Route::get('voli/{volo}', 'App\Http\Controllers\ApiController@voli');
Route::get('cocktail/{num}', 'App\Http\Controllers\ApiController@cocktail');


Route::get('registrazione', 'App\Http\Controllers\Registrazione_Login@vedi_registrazione');
Route::post('registrazione', 'App\Http\Controllers\Registrazione_Login@registra');

Route::get('login', 'App\Http\Controllers\Registrazione_Login@vedi_login');
Route::post('login', 'App\Http\Controllers\Registrazione_Login@login');

Route::get('logout', 'App\Http\Controllers\Registrazione_Login@logout');

Route::get('home_session', 'App\Http\Controllers\Home_page@visita');
Route::post('home_session', 'App\Http\Controllers\Home_page@prodotti_preferiti');



Route::get('modifica_profilo', 'App\Http\Controllers\Home_page@vedi_profilo');
Route::post('modifica_profilo', 'App\Http\Controllers\Home_page@aggiorna_profilo');

Route::get('cambiopassword', 'App\Http\Controllers\Home_page@vedi_password');
Route::post('cambiopassword', 'App\Http\Controllers\Home_page@cambia_password');

Route::get('cancellaprofilo', 'App\Http\Controllers\Home_page@vedi_cancella_profilo');
Route::post('cancellaprofilo', 'App\Http\Controllers\Home_page@cancella_profilo');

Route::get('vedi_preferiti','App\Http\Controllers\Home_page@prodotti_preferiti');


Route::get('vedi_prodotti', 'App\Http\Controllers\Prodotti@visualizza_pagina');
Route::get('prodotti', 'App\Http\Controllers\Prodotti@visualizza_prodotti');

Route::get('afferenza', 'App\Http\Controllers\Prodotti@visualizza_afferenza');


Route::get('aggiungi/{id}', 'App\Http\Controllers\Prodotti@aggiungi_prodotto');
Route::get('rimuovi/{id}', 'App\Http\Controllers\Prodotti@rimuovi_prodotto');



