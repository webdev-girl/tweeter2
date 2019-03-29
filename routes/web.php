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

Route::get('/about', function () {
        return view('about');
});

Route::get('/marketing', function (){
    return view('/marketing');
});
Route::get('/user', function () {
        return view('user');
});
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PostsController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'LogoutController@logout');

Route::get('/posts', 'PostsController@index');
Route::post('/tweet', 'PostsController@saveTweet')->name('save-tweet');
Route::delete('/delete-tweet', 'PostsController@deleteTweet')->name('delete-tweet');
Route::post('/like-tweet', 'PostsController@likeTweet');

Route::get('/edit-tweet/{id}', 'PostsController@editTweetDisplay');
Route::post('/edit-tweet/{id}', 'PostsController@editTweet');
Route::post('/follow', 'PostsController@follow');

Route::post('/comment', 'CommentsController@saveComment')->name('savecomment');
Route::delete('/delete/{id}', 'CommentsController@deleteComment')->name('delete-comment');

Route::get('/edit-comment/{id}', 'CommentsController@editCommentDisplay');
Route::post('/edit-comment/{id}', 'CommentsController@editComment');
Route::get('/dashboard', 'HomeController@index')->name('home');
// require __DIR__ . '/profile/profile.php';
Route::get('profile', 'UsersController@profile');
Route::post('profile', 'UsersController@update_avatar');

Route::get('/edit-profile/{id}', 'UsersController@editProfileDisplay');
Route::post('/edit-profile', 'UsersController@editProfile');

// Route::get('/user-display/{id}', 'UsersController@show')->name('user.show');
// Route::get('users/{user}', 'UsersController@show')->name('user.show');
// Route::get('users/{user}/follow', 'UsersController@follow')->name('user.follow');
// Route::get('users/{user}/unfollow', 'UsersController@unfollow')->name('user.unfollow');
// Route::post('/follow/{id}', 'UsersController@follow');
// Route::get('/unFollow', 'UsersController@unFollow');

// route::post('profile/{profileId}/follow', 'ProfileController@followUser')->name('user.follow');
// route::post('/{profileId}/unfollow', 'ProfileController@unFollowUser')->name('user.unfollow');


 // Route::get('/user', 'ProfileController@show')->name('user');
// Route::post('profile/{profileId}/user-follow', 'UsersController@followUser')->name('user-follow');
// Route::post('/{profileId}/user-unfollow', 'UsersController@unFollowUser')->name('user-unfollow');
// Route::get('/post/{id}', 'PostsController@show')->name('posts.show');
// Route::get('Posts/{post}', 'PostController@show')->name('post.show');
// Route::get('/editpost/{id}', 'homeController@editPostdisplay');


// Route::get('/posts', 'PostsController@index')->name('posts.index');

// Route::post('profile/{profileId}/user-follow', 'UsersController@followUser')->name('user-follow');
// Route::post('/{profileId}/user-unfollow', 'UsersController@unFollowUser')->name('user-unfollow');
