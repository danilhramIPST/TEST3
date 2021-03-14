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




//Route::get('/', [WelcomeController::class, 'show']);

use App\Http\Controllers\WelcomeController;

Route::group(['prefix' => 'my'], function () {
    Route::get('/controller', [WelcomeController::class, 'get']);
    Route::get('route/{price}', [WelcomeController::class, 'show']);

});


