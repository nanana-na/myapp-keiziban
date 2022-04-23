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
    return redirect()->route('questions.index');
});
Route::get('introduction', function () {
    return view('introduction');
});
Route::get('etc', function () {
    return view('etc');
});
Route::get('recommend', function () {
    return view('recommend');
});
Route::get('ad', function () {
    return view('ad');
});
Route::get('rule', function () {
    return view('rule');
});
Route::get('/error', function () {
    return view('error');
});
Route::resource('posts', 'PostController');

Route::resource('frees', 'FreeController');

Route::resource('yets', 'YetController');

Route::resource('friends', 'FriendController');

Route::resource('friendmessages', 'FriendmessageController');

Route::resource('users', 'UserController');

Route::resource('asks', 'AskController');

Route::resource('questions', 'QuestionController');

Route::resource('questionitems', 'QuestionItemController');

Route::resource('answers', 'AnswerController');

Route::resource('admins', 'AdminController');

Route::post('/updateimage', 'UserController@updateimage');

Route::resource('comments', 'CommentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tomorrow', 'FriendController@tomorrow');

Route::get('/List', 'FriendController@list');

Route::get('/askList', 'FriendController@asklist');

Route::delete('/yesterday', 'FriendController@yesterday');

Route::delete('/reduce', 'CommentController@reduce');

Route::resource('jobs', 'JobController');
