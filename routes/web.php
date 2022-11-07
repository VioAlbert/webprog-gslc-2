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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('team', function () {
    $team_data = [
        "Vio Albert Ferdinand" => "Midlaner",
        "Alan Watson" => "Gold laner",
        "Bobby Atkins" => "Exp laner",
        "Colton Walker" => "Jungler",
        "Delta Smith" => "Roamer",
        "Ester Welkins" => null
    ];
    return view('team')
    ->with('team', $team_data);
});

Route::get('tournaments', function () {
    $tourney = [];
    return view('tournaments')
    ->with('tourney_data', $tourney);
});
