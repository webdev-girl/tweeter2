<?php


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comment::class, 50)->create()->each(function ($tweet_id) {
            for($i=0; $i<=rand(1,30); $i++) {
                $tweet_id>comments()->save(factory(\App\Comment::class)->make());
        }

        });
    }
}
