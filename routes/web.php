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
    $data = [
        'saluto' => 'Hello World!'
    ];
    return view('home', $data);
})->name('home');

Route::get('contatti', function(){
    $data = [
        'infos' => [
            'nome' => 'Marco',
            'cognome' => 'Rossi',
            'via' => 'Via Pippo'
        ]
        ];
    return view('about', $data);
})->name('about');

