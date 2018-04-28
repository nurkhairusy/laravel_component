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
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});

// Route::get('/user', 'UserController@index');


$uri = "/cek";
$callback = "UserController@something";
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);



Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});

//redirect /here to url /there, 301 is the redirect error
Route::redirect('/here', '/there', 301);


Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// REQUIRED PARAMETERS
// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });


Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'post id: '.$postId.' and comment id: '.$commentId;
});

// OPTIONAL PARAMETERS
Route::get('user/{name?}', function ($name = null) {
    return $name;
});

// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });

