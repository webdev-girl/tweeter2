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
Route::get('/users', 'UsersController@getAllUsers');
Route::get('/tweets', 'PostsController@getAllTweets');
Route::get('/tweetsByNumber/{number}', 'PostsController@getTweetsByNumber');
Route::get('/comments', 'CommentsController@getAllComments');
Route::get('/tweetlikes', 'PostsController@getAlltweetLikes');