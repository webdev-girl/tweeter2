<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\TweetLike;
use App\Comment;
use App\User;
use App\Follower;
use Auth;
use DB;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Tweet as TweetResource;
use App\Http\Resources\TweetLike as TweetLikeResource;
use App\Http\Resources\Comments as CommentsResource;

class PostsController extends Controller
{
    public function __construct()
    {
         // $this->middleware('auth');
    }

    public function index() {

        $user = Auth::user();
        // $user_id = Auth::user()->id;
        $user = new User;
        $users = $user;
        $tweet = new Tweet;
        $editTweet = new Tweet;
        $tweetLike = new TweetLike;
        $tweets = $tweet->where('user_id', $user->id)->orderBy('created_at','desc')->get();

        // $potentialFollowers = $users = $user->get();
        // $follower = $follower->where("user_id",$user->id)->where("following", 1)->get(array('id'))->toArray();
        // $tweet = Tweet::orderBy('created_at','desc')->get();
        $tweetCollection = array();
        $count = count($tweets);
        $name = new User;
        $currentUserId = $user->id;
        // $names = $name->where('id', '!=', $currentUserId)->get();
        // $names = User::where('id', '!=', $currentUserId)->simplePaginate(75);
        // $data = Tweet::orderBy('id')->paginate(3);

    foreach ($tweets as $tweet) {
         $newTweet = $tweet;
         $newTweet['comments'] = $comments;
         $comments = Tweet::find($tweet->id)->comments;
         $newTweet['liked'] = false;
         $tweetLike = \DB::table('TweetLike')->where('user_id', $user->id)->where('tweet_id', $tweet->id)->orderBy('created_at','DESC')->first();

    if(isset($tweetLike->like) && ($tweetLike->like == "1")){
         $newTweet['liked'] = true;
         }
         $newTweet['user'] = Tweet::find($tweet->id)->user;

    if($user->id == $tweet->user_id){
         $newTweet['has_permissions'] = 1;
          }

    if($user->id == $tweet->user_id){
        $newTweet['can_delete'] = 1;
        }
        $tweetCollection[] = $newTweet;
         }
        $tweets = $tweetCollection;
        $likes = DB::table('tweet_likes')->where('user_id', '=', $user->id)->get();
        return view('home',compact (['users' => $users],'user','potentialFollowers','tweet','tweets','count','names','value'));
        }

    public function show($username){
        $users = User::where('username', $username)->firstOrFail();
        return view('home','$users', ['username' => $username]);
        }

//////////this works
    public function saveTweet(Request $request){
        $user = Auth::user();
        $tweet = new Tweet;
        $tweet->user_id = $user->id;
        $tweet->tweet = $request->tweet;
        $tweet-> save();
        return redirect('home');
    }
/////////this works
    public function deleteTweet(Request $request) {
        $tweet = Tweet::find($request->tweet_id);
        if($tweet){
        Tweet::destroy($request->tweet_id);
        }
        // return redirect('home');
           return back()
               ->with('success','Successfully deleted!!.');
    }
///// this works
    public function likeTweet(Request $request){
        $user = Auth::user();
        $tweetLike = new TweetLike;
        $tweetLike->user_id = $user->id;
        $tweetLike->tweet_id = $request->tweet_id;
        $tweetLike->like = $request->like;
        $tweetLike-> save();
         return redirect('home');
        }

    // public function unLikeTweet(Request $request){
    //     $user = Auth::user();
    //     $tweetUnlike = TweetUnLike::get();
    //     $tweetUnLike->user_id = $user_id;
    //     $tweetUnLike->tweet_id = $request->tweet_id;
    //     $tweetUnLike->like = $request->like;
    //     return redirect('home');
    //  }

    public function delete($id){
        $user = Auth::user();
        Comment::where('id', $id)->delete();
          return redirect('home');
    }

////// this works
    public function editTweet(Request $request){
        $tweet = Tweet::find($request->tweet_id);
        $tweet->tweet = $request->tweet;
        $tweet->save();
         return redirect('home');
     }
////// this works
    public function editTweetDisplay(Request $request, $id){
        $tweet = new Tweet;
        $tweet = Tweet::find($id);
        return view('edit-tweet', compact('tweet'));
    }

    public function getAllUsers(){
        $users = User::get();
        return new UserResource($users);
    }
    public function getAllTweets(Request $request){
        $tweets = Tweet::get();
        // $id = Auth::user();
        $tweets = $tweet->where('user_id', $user->id)->orderBy('created_at','desc')->get();
         return new TweetResource($tweets);
   }

   public function getSaveTweets($number){
       $tweets = Tweet::limit($number)->orderBy('id','DESC')->get();
       return new TweetResource($tweets);
        }

   public function getTweetComments(Request $request, $tweetId){
       // $user = Auth::user();
       $comment = new Comment;
       $comment ->user_id = $request->user_id;
       $comment ->tweet_id = $request->tweet_id;
       $comment ->comment = $request->comment;
       // $comment-> save();
       $comment = Comments::where("tweet_id", "=", $tweetId)->get();
         return new CommentsResource($comment, $user);
   }
   public function getNewCommentApi(Request $request){
       $user = Auth::user();
       $comment = new Comments;
       $comment->user_id = $request->user_id;
       $comment->tweet_id = $request->tweet_id;
       $comment->comment = $request->comment;
       if($request->comment){
           $comment->save();
           return '{"Success" : "1"}';
      }
      else{
           return '{"Success" : "0"}';
      }
       return new CommentsResource($comment, $user);
    }

    public function getTweetsByNumber($number){
        $tweets = Tweet::limit($number)->get();
        return new TweetResource($tweets);
    }


    public function getTweetsByNumberFromStartPoint(Request $request, $number, $id){
        $tweets = Tweet::limit($number)->where("id", "<=", $id)->orderBy('id','DESC')->get();
        $tweetsExtended = [];
        $tweetLike = new TweetLike;

    foreach($tweets as $tweet){
        $tweetId = $tweet["id"];
        $tweetLikes = TweetLike::limit(1)->where("tweet_id","=", $tweetId)->where("user_id", "=", $request->user_id)->where("like", "=", "1")->get();
        $likedByUser = 0;

         If(isset($tweetLikes[0]["like"])){
                $likedByUser = $tweetLikes[0]["like"];
           }
                 $tweet["liked_by_user"] = $likedByUser;
                 $totalTweetsCount = TweetLike::distinct("user_id")->where("tweet_id", "=", $tweetId)->where("like", "=", "1")->get();
                 $tweet["number-of_likes"] = count($totalTweetsCount);
                 $tweetsExtended[] = $tweet;
             }
                 $tweets = $tweetsExtended;
                return new TweetResource($tweet, $tweets);
           }

    public function getAllTweetLikesApi(Request $request){
        // $id = Auth::user();
        $tweetLike = new TweetLike;
        $previousTweetLike = TweetLike::limit(1)->where("user_id", "=", $request->user_id)->where("tweet", "=", "1")->get();
           if(count($previousTweetLike) == 0){
               $tweetLike->user_id = $request->user_id;
               $tweetLike->tweet_id = $request->tweet_id;
               $tweetLike->like = $request->like;
            if( $tweetLike-> save()){
                     return'{"success" : "1"}';
                }
                else{
                    return'{"success" : "0"}';
                }
            }

                else{
                    $tweetLikeId = $previousTweetLike[0]["id"];
                    $previousTweetLike = TweetLike::find($tweetLikeId);
                    $previousTweetLike->like = $request->like;
                    $previousTweetLike->save();
                     return '("Liked!" : "1")';
                 }
             }
    // public function getAllTweetUnLikesApi(Request $request){
    //     $tweetUnlike = TweetUnLike::get();
    //     $previousTweetUnLike = TweetUnLike::limit(1)->where("user_id", "=", $request->user_id)->where("tweet", "=", "0")->get();
    //          if(count($previousTweetLike) == 0){
    //              $tweetUnLike->user_id =$request->user_id;
    //              $tweetUnLike->tweet_id = $request->tweet_id;
    //              $tweetUnLike->like = $request->like;
    //           if( $tweetUnLike-> save()){
    //                    return'{"success" : "1"}';
    //               }
    //               else{
    //                   return'{"success" : "0"}';
    //                }
    //                  return new TweetResource($tweetUnLike);
    //           }
    //
    //                   else{
    //                       $tweetLikeId = $previousTweetLike[0]["id"];
    //                       $previousTweetUnLike = TweetLike::find($tweetLikeId);
    //                       $previousTweetUnLike->like = $request->like;
    //                       $previousTweetUnLike->save();
    //                        return '("Liked!" : "0")';
    //                }
    //         }
            // return response()->json($data);
    }
