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
    return view('index');
});

//Forum Controller
Route::get('/forum', [
    'uses' => 'ForumController@forum', 'as' => 'forum'
]);
Route::get('/forum/post/add', [
    'uses' => 'ForumController@add_post', 'as' => 'add_forum_post'
]);
Route::get('/forum/post/1', [
    'uses' => 'ForumController@single_post', 'as' => 'view_single_post'
]);

//Profile Controller
Route::get('/profile', [
    'uses' => 'ProfileController@profile', 'as' => 'my_profile'
]);

//Users Controller
Route::get('/users/view', [
    'uses' => 'UsersController@view_users', 'as' => 'view_users'
]);