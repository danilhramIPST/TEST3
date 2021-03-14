<?php

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

/*Route::group(['prefix' => 'my'], function () {
    Route::get('/state', function () {
        echo 'state';
    });
    Route::get('/university', function () {
        echo 'university';
    });
    Route::get('/bank', function () {
        echo 'bank';
    });*/
//});
/*php artisan make:controller test\FirstTestController;
php artisan make:controller test\SecondTestController;*/

/*echo "Hello, world";*/


use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'show']);

use App\Http\Controllers\test\FirstTestController;
use App\Http\Controllers\test\SecondTestController;

Route::group(['prefix' => 'test'], function () {
    Route::get('/1', [FirstTestController::class, 'index']);
    Route::get('/2', [SecondTestController::class, 'index']);
});

use App\Http\Controllers\UserController;

Route::get('/user/{name?}', [UserController::class, 'showName']);
