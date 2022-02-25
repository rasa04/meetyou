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

Route::get('/welcome', function () {
    return view('welcome', ['name'=>'Rasa', 'greeting'=>'Привет!']);
});

Route::view('/', 'welcome', ['name'=>'Rasa', 'greeting'=>'Привет!']);


Route::get('/greeting', function () {
    return 'Hello World';
});
Route::any('/any', function () {
    return 'any';
});
Route::redirect('/here', '/there');

//Route::get('/user/{id}', function ($id) {
//    return 'User '.$id;
//});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post: {$postId}" . "<hr>Comment: {$commentId}";
});

use Illuminate\Http\Request;
 
Route::get('/superuser/{id}', function (Request $request, $id) {
    return 'User '.$id;
});


/*
Route::get('/user/{name}', function ($name) {
    return "character: $name";
})->where('name', '[A-Za-z]+');
 
Route::get('/user/{id}', function ($id) {
    return "Number: $id";
})->where('id', '[0-9]+');
 
Route::get('/user/{id}/{name}', function ($id, $name) {
    return "Number and character: $id & $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
*/



/*
Route::get('/user/{id}/{name}', function ($id, $name) {
    return "$id and $name";
})->whereNumber('id')->whereAlpha('name');
 
Route::get('/user/{name}', function ($name) {
    return "$name";
})->whereAlphaNumeric('name');
 
Route::get('/user/{id}', function ($id) {
    return "$id";
})->whereUuid('id');
*/





//may specify constrnins with app/providers/rsp->boot()
Route::get('/user/{id}', function ($id) {
    // Only executed if {id} is numeric...
    return "$id";
});




//You must explicitly allow / to be part of your placeholder using a where condition regular expression:
Route::get('/search/{search}', function ($search) {
    //Encoded forward slashes are only supported within the last route segment.
    return $search;
})->where('search', '.*');




//NAMED ROUTES//
Route::get('/user/site', function () {
    //Route names should always be unique.
    return "Your own site";
})->name('site');

/*
//You may also specify route names for controller actions:
Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');

*/

// надо еще указывать путь на шаблоне типа <a href="{{ route('site') }}">site</a>
Route::get('/user/{id}/profile', function ($id) {
    return $id;
})->name('profile');




