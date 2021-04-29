<?php

use Illuminate\Support\Facades\Route;
/* in this project for run the project give command  ->"php artisan serve --port=8002"
unless not able to run project becouse use port no 8002 here
*/

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

Route::Resource('movies','MoviesController');
