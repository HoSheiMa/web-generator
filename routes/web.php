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
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/projects/{project}/success', [App\Http\Controllers\ProjectController::class, 'success']);
    Route::get('/projects/{project}/export', [App\Http\Controllers\ProjectController::class, 'export']);
    Route::resource('projects', App\Http\Controllers\ProjectController::class);
    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('IsAdmin');;
    Route::get('/payment/transactions', [App\Http\Controllers\PaymentController::class, 'transactions']);
    Route::resource('payment', App\Http\Controllers\PaymentController::class);
    Route::get('/studio/{project}', [App\Http\Controllers\StudioController::class, 'index']);
    // confirm route for all urls
    Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus']);
    Route::get('/aboutus', function () {
        return view('aboutus');
    });
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });
});
