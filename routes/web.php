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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome', 'welcome', ['name'=>'Rasa', 'greeting'=>'Привет!']);


Route::get('/greeting', function () {
    return 'Hello World';
});
Route::any('/any', function () {
    return 'any';
});
Route::redirect('/here', '/there');

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post: {$postId}" . "<hr>Comment: {$commentId}";
});

use Illuminate\Http\Request;
 
Route::get('/superuser/{id}', function (Request $request, $id) {
    return 'User '.$id;
});