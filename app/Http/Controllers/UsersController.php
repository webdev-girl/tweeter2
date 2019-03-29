<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\Comment;
use App\TweetLike;
use App\User;
use App\UserDetail;
use App\Follower;
use Auth;
use App\Http\Resources\User as UserResource;
class UsersController extends Controller
{
        public function __construct(){
              $this->middleware('auth');
        }
        public function show(User $user){
            return view('user', compact('user'));
        }
        public function index() {
            $user = Auth::user();
            $user = new User();
            $user = $user->find($id);
            $editTweet = new Tweet;
            $tweetLike = new TweetLike;
            $tweets = $tweet->where('user_id', $user->id)->get();

            // $follower = new Follower;
            // $follower = $follower->where("user_id",$user->id)->where("following", 1)->get(array('id'))->toArray();
            // $potentialFollowers = $users = $users->get();

            $tweet = Tweet::orderBy('created_at','desc')->get();
            $tweetCollection = array();

        foreach ($tweets as $tweet) {
            $newTweet = $tweet;
            $comments = Tweet::find($tweet->id)->comments;
            $newTweet['comments'] = $comments;

            $newTweet['liked'] = false;
             // $tweetLike = \DB::table('TweetLike')->where('user_id', $user->id)->where('tweet_id', $tweet->id)->orderBy('created_at','DESC')->first();

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
              return view('home',compacts('user','potentialFollowers','tweets'));
            }

        public function profile(){
            $user = Auth::user();
            $userDetail = new UserDetail();
            $userDetail = $userDetail->find($user->id);
            return view('profile',compact('user', 'userDetail'));
        }

        public function update_avatar(Request $request){

         $request->validate([
             'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         $user = Auth::user();

         $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

         $request->avatar->storeAs('avatars',$avatarName);

         $user->avatar = $avatarName;
         $user->save();

         return back()
             ->with('success','You have successfully upload image.');

         }
 // this works//////
        public function editProfileDisplay(Request $request){
           $currentUser = Auth:: User();
           $currentUserId = $currentUser->id;
           $user = new UserDetail();
           $user = $user->find($currentUserId);
           return view('edit-profile',compact('user', 'currentUser'));
         }
// this works////
        public function editProfile(Request $request){
          $currentUser = Auth::user();
          $userDetail = new UserDetail;
          $currentUserId = $currentUser->id;
          $userDetail = $userDetail->find($currentUserId);
          $userDetail->first_name = $request->first_name;
          $userDetail->last_name = $request->last_name;
          $userDetail->username = $request->email;
          $userDetail->gender = $request->gender;
          $userDetail->phone = $request->phone;
          $userDetail->dob = $request->dob;
          $userDetail->country = $request->country;
          $userDetail -> save();
          // return redirect('profile');
          return back()
              ->with('success','You have successfully updated your details.');
         }

        // public function follow(Request $request, User $user){
        //
        //     if($request->user()->canFollow($user)) {
        //         $request->user()->following()->attach($user);
        //     }
        //         return redirect()->back();
        //     }
        //
        // public function unFollow(Request $request, User $user){
        //
        //     if($request->user()->canUnFollow($user)) {
        //         $request->user()->following()->detach($user);
        //     }
        //         return redirect()->back();
        //     }
        //         public function getAllUsers(){
        //     $users = User::get();
        //     // var_dump($users);
        //     return new UserResource($users);
        // }
        //    public function followUser(int $profileId){
        //
        //      $user = User::find($profileId);
        //      if(! $user) {
        //
        //     return redirect()->back()->with('error', 'User does not exist.');
        //    }
        //
        //    $user->followers()->attach(auth()->user()->id);
        //        return redirect()->back()->with('success', 'Successfully followed the user.');
        //    }
        //
        //    public function unFollowUser(int $profileId){
        //
        //      $user = User::find($profileId);
        //      if(! $user) {
        //
        //     return redirect()->back()->with('error', 'User does not exist.');
        // }
        //    $user->followers()->detach(auth()->user()->id);
        //    return redirect()->back()->with('success', 'Successfully unfollowed the user.');
        //    }

           // public function show(int $userId){
           //
           // $user = User::find($userId);
           // $followers = $user->followers;
           // $followings = $user->followings;
           // return view('user.show', compact('user', 'followers' , 'followings');
           // }

        // public function follow(Request $request){
        // $user = Auth::user();
        // $follower = new Follower;
        // $follower ->user_id = $user->id;
        // $follower ->follower_id = $request->follow_id;
        // $follower ->follower = $request->follow;
        // $follower -> save();
        // return redirect('home');
        // }
    }
