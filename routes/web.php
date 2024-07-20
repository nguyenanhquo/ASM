<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Client.index');
});

Route::get('/client/detail', function () {
    return view('Client.detail');
});

Route::get('/client/search-not-found', function () {
    return view('Client.search-not-found');
});
Route::get('/client/search-result', function () {
    return view('Client.search-result');
});




