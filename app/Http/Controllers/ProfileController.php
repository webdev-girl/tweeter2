<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use APP\UserDetail;
// use App\Follow;
// use App\following;
use Auth;
class ProfileController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function show($username){
        $user = User::where('username', $username)->firstOrFail();
    return view('profile', ['username' => $username]);
    }
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
 //

}
