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

Route::get('/', function () {
    //return view('welcome');
    return view('top');
});
Route::get("about","PagesController@getIndex"); // Controller名@クラス名で指定

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController', ['only' => [
    'index', 'show'
]]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
    Route::resource('posts', 'Admin\PostsController');
    Route::resource('users', 'Admin\UserController');
});

//twitter
Route::get('auth/login/twitter', 'Auth\SocialController@getTwitterAuth');
Route::get('auth/login/callback/twitter', 'Auth\SocialController@getTwitterAuthCallback');

