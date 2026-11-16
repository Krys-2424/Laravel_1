<?php

use Illuminate\Support\Facades\Route;
use App\Models\Dragon;


/*
Une route attend "en paramètres" une URL et un type de requête HTTP
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/bonjour', function() {
    $prenom = "Boby";

    return view('bonjour', [
        'prenom' => $prenom
    ]);
});


Route::get('/bonjour/{prenom}', function($prenom) {

    return view('bonjour', [
        'prenom' => $prenom,
        'humeur' => 'content'
    ]);
});



Route::get('/bonjour/{prenom}/{humeur}', function($prenom, $humeur) {

    return view('bonjour', [
        'prenom' => $prenom,
        'humeur' => $humeur
    ]);
});

// action Index
Route::get('/dragons', function() {
    $dragons = Dragon::all();
    return view('index', compact('dragons') );
});


// action Show
// il existe la méthode find($id) depuis un Model permettant de retrouver le modèle à l'id donné

Route::