<?php
use App\Tweet;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         factory(App\Tweet::class, 5)->create()->each(function ($user) {
          for($i=0; $i<=rand(1, 20); $i++) {
              $user->tweets()->save(factory(App\Tweet::class)->make());
            }
        });
        $users = factory(Tweet::class, 10)->create();
     }
}
