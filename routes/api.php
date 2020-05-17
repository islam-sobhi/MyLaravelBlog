<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', 'SiteUIcontroller@index')->name('index');
Route::get('/show/{slug}', 'SiteUIcontroller@showPost')->name('post.show');
Route::get('/category/{id}', 'SiteUIcontroller@category')->name('categories.show');
Route::get('/tag/{id}', 'SiteUIcontroller@tag')->name('tag.show');

