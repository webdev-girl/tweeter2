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

Route::get('/tweets', 'PostsController@getAllTweets');
Route::get('/tweet-comments/{tweet_id}', 'PostsController@getTweetComments');
Route::post('/new-comment', 'PostsController@getNewCommentApi');

Route::post('/tweetlikes-api', 'PostsController@getAllTweetLikesApi');
// Route::post('/tweetunlike-api', 'PostsController@getAllTweetUnLikesApi');

Route::get('/tweetsbynumber/{number}', 'PostsController@getTweetsByNumber');
Route::post('/tweets', 'PostsController@getSaveTweets');

Route::get('/tweetsbynumberfromstartpoint/{number}/{id}', 'PostsController@getTweetsByNumberFromStartPoint');
