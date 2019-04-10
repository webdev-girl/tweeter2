<?php


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          // $r = 0 . '-' . 10;
         $Tweets = \App\Tweet::all();

         $Tweets->each(function($tweet){
              factory(\App\Comment::class)
               ->create([
                      'tweet_id' => $tweet->id,
                      'user_id' => App\User::all()->random()->id
                   ]);
           });

           factory(\App\Comment::class, 50)->create()->each(function ($tweet_id) {
               for($i=0; $i<=rand(1,30); $i++) {
                   $tweet_id>comments()->save(factory(\App\Comment::class)->make());
           }

           });
       }
}
