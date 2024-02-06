<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\UsersController;

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
    return view('/welcome');
});

Route::get('/home', function () {
    return view('pages@home');
});

Route::get('/accountindex', function () {
    return view('accountindex');
});

Route::get('/login', function () {
    return view('pages@login');
});

Route::get('/signup', function () {
    return view('pages@signup');
});

// Route::post('/signup', [UsersController::class,'store']);
