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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostController@index')->name('index');
Route::get('post/{id}', ['uses' => 'PostController@show'])->name('postInfo');
Route::post('post/store','PostController@store');
Route::post('comment/store','CommentController@store');


Route::group(['middleware' => ['web']], function () {
	Route::get('/redirect/{social}', 'SocialAuthController@redirectToProvider');
	Route::get('/callback/{social}', 'SocialAuthController@handleProviderCallback');
	Route::post('/logout', 'SocialAuthController@logout')->name('logout');
});



Route::get('storage/post/{filename}', 'PostController@setPathFileInView')->name('filePathInView');
Route::get('storage/avatar/{filename}', 'UserController@setAvatarParth')->name('avatarPath');

