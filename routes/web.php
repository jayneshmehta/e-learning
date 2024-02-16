<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckToken;

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
    return view('welcome');
});

Route::get('/login', function () {  
    return view('pages.login');
});
//for users
Route::post('/new-user', [UserController::class, 'create']);
Route::get('/signup', [UserController::class, 'index']);
Route::post('/login-user', [UserController::class, 'login']);
Route::post('/forceLogout-user', [UserController::class, 'forceLogout']);
Route::post('/logout-user', [UserController::class, 'logout']);


Route::get('/admin/login', function () {  
    return view('pages.admin.login');
});

//for Admin
Route::post('/admin/new-user', [AdminController::class, 'create']);
Route::get('/admin/signup', [AdminController::class, 'index']);
Route::post('/admin/login-admin', [AdminController::class, 'login']);
Route::post('/admin/forceLogout-admin', [AdminController::class, 'forceLogout']);
Route::post('/admin/logout-admin', [AdminController::class, 'logout']);



Route::get('/forceLogout', function () {
    return view('pages.forceLogout');
});

Route::get('/admin/forceLogout', function () {
    return view('pages.admin.forceLogout');
});

Route::middleware([CheckToken::class])->group(function(){
    Route::get('/home', function () {
        return view('pages.home');
    });
    Route::get('/view_course', function () {
        return view('pages.view_course');
    });
    Route::get('/view_profile', function () {
        return view('pages.view_profile');
    });
    Route::get('/admin/dashboard', function () {
        return view('pages.admin.dashboard');
    });
    Route::get('/admin/allcourses', function () {
        return view('pages.admin.view_allcourses');
    });
    Route::get('/admin/allusers', function () {
        return view('pages.admin.allusers');
    });
});


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";

});

Route::get('/Changepermission',function(){
    $storagePath =  base_path() . '/storage';
     array_map(fn ($item) => chmod($item, 0777), iterator_to_array(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($storagePath, RecursiveDirectoryIterator::SKIP_DOTS))));
     echo "Permissions changed successfully.";
});