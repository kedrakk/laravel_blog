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

Route::get('/', 'App\Http\Controllers\ArticleController@index');
Route::get('/articles', 'App\Http\Controllers\ArticleController@index');
Route::get('/articles/detail/{id}', 'App\Http\Controllers\ArticleController@detail');
Route::get('/articles/add', 'App\Http\Controllers\ArticleController@add');
Route::post('/articles/add', 'App\Http\Controllers\ArticleController@create');
Route::get('/articles/delete/{id}', 'App\Http\Controllers\ArticleController@delete');
Route::get('/articles/edit/{id}', 'App\Http\Controllers\ArticleController@edit');
Route::post('/articles/edit/{id}', 'App\Http\Controllers\ArticleController@update');
Route::post('/comments/add', 'App\Http\Controllers\CommentController@create');
Route::get('/comments/delete/{id}', 'App\Http\Controllers\CommentController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
