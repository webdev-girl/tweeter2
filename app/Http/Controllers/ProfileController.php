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
          // $this->middleware('auth');
    }

    public function show($username){
        $user = User::where('username', $username)->firstOrFail();
        return view('profile', ['username' => $username]);
    }


}
