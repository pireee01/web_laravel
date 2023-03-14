<?php

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

Route::get('/', [\App\Http\Controllers\WebController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\WebController::class, 'about']);

Route::group(['prefix'=>'/test'], function(){
    Route::get('route1/{param}', function ($param){
        return $param;
    })->name('test.route1');

    Route::get('/test/route2/{param}', function ($param){
        return $param;
    })->name('test.route2');
});