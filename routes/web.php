<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DelayController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', function () { return view('home'); })->name('home');

    //####################
    //  Admin Middleware
    //####################
    Route::group(['middleware' => 'admin'], function() {

        // UserController
        Route::controller(UserController::class, function() {

        });

        // ProductController
        Route::controller(ProductController::class)->group(function() {
            Route::resource('products', ProductController::class);
        });

        // Setting Controller
        Route::controller(SettingController::class, function () {
            Route::resource('settings', SettingController::class);
        });

    });


    //###################
    //   HQ Middleware
    //###################
    Route::group(['middleware' => 'hq'], function() {

        // Delay Controller
        Route::controller(DelayController::class, function() {
            Route::resource('delays', DelayController::class);
        });


    });


    //###################
    //       User
    //###################

    Route::controller(OrderController::class, function() {

        // Order Controller
    });



});