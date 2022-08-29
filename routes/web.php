<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BlogController;

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

Route::get('/result', function () {
    return view('dream_download');
});

Route::get('/why', function () {
    return view('the_why');
});

Route::get('/dreams', function () {
    return view('people_dreams');
});

Route::get('/inspired', function () {
    return view('get_inspired');
});

Route::get('/share', function () {
    return view('share_your_wish');
});

Route::get('/result', [MessageController::class, 'showOne']);

Route::get('/dreams', [MessageController::class, 'showAll']);

Route::post('/create', [MessageController::class, 'create'])->name('create');

// Route::get('/why', [MessageController::class, 'showAll1']);


///// BLOG CONTROLLER


Route::get('/inspired', [BlogController::class, 'showAll']);
