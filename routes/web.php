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



use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'show']);

use App\Http\Controllers\test\FirstTestController;
use App\Http\Controllers\test\SecondTestController;
Route::group(['prefix' => 'test'], function () {
    Route::get('/1', [FirstTestController::class, 'index']);
    Route::get('/2', [SecondTestController::class, 'index']);
});

use App\Http\Controllers\UserController;
Route::get('/user/{price?}', [UserController::class, 'showName']);
Route::post('/user/store', [UserController::class, 'store']);

use App\Http\Controllers\ExamController;


Route::group(['prefix'=>'my'], function (){
    Route::get ('/route/{price}', [ExamController::class, 'show']);
Route::get('/controller', [ExamController::class, 'get']);
Route::get('/view', [ExamController::class, 'sendView']);


});
use App\Http\Controllers\test\TaskController;

Route::post('/task/store', [TaskController::class, 'store']);

