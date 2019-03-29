<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Tweet;
use Auth;
use Illuminate\Http\Request;
use App\Http\Resources\Comment as CommentResource;
class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         }
    public function index() {
        $user = Auth::user();
        $tweet = new Tweet;
        $comment = new Comment;
        $comments = $comment->get();
        $comments = $comment->where('user_id', $user->id)->get();
        return view('home',compact('comments'));
  }
////  this works
    public function saveComment(Request $request){
        // die("Test");
        $user = Auth::user();
        $comment = new Comment;
        $comment ->user_id =  $user->id;
        $comment ->tweet_id = $request->tweet_id;
        $comment ->comment = $request->comment;
        $comment-> save();
        return redirect('home');
        }
        // this works//
    public function deleteComment(Request $request) {
         $comment = Comment::find($request->comment_id);
         if($comment){
        Comment::destroy($request->comment_id);

        }
          return redirect('home');

         // return back()
     //     ->with('success',' Successfully deleted!!.');
     }
     // this works
     public function editComment(Request $request){
         $comment = Comment::find($request->id);
         $comment = Comment::find($request->comment_id);
         $comment ->comment = $request->comment;
         $comment ->save();
            return redirect('home');
         // var_dump($tweet);die();
        }

     public function editCommentDisplay(Request $request, $id){
         $comment = new Comment;
         $comment = Comment::find($id);
        return view('edit-comment', compact('comment'));

    }
    public function getAllComments(){
        $comments = Comment::get();
        // var_dump($users);
        return new CommentResource($comments);
    }

}
