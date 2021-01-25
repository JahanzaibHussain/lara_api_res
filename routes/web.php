<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get("/admin", "PostController@index");
Route::get("/api/admin", "Api\PostController@index");
Route::get("/api/admin", "Api\PostController@index");
Route::get('/api/admin/{id}', "Api\PostController@show");

Route::get('/users', ['users' => 'UserController@index', 'as' => 'users.index']);

