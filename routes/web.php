<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/why', function () {
    return view('the_why');
});

Route::get('/dreams', function () {
    return view('people_dreams');
});

Route::get('/inspired', function () {
    return view('get_inspired');
});

// Route::get('/share', function () {
//     return view('share_your_wish');
// });

Route::get('/share', [MessageController::class, 'showAll']);

Route::post('/create', [MessageController::class, 'create']);