<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Auth')->group(function(){
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::namespace('Article')->middleware('auth:api')->group(function(){
    Route::post('create-new-article', 'ArticleController@store');
    Route::patch('update-article/{article}', 'ArticleController@update');
    Route::delete('delete-article/{article}', 'ArticleController@destroy');
});
Route::get('user', 'UserController');
