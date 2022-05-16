<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

    Route::group(['middleware' => 'adminMiddleware'], function() {

        Route::controller(ProductController::class)->group(function() {
            route::resource('products', ProductController::class);
        });

    });

});