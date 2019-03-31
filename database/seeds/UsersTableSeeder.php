<?php
use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create()->each(function ($user) {
         for($i=0; $i<=rand(1, 20); $i++) {
             $user->tweets()->save(factory(App\Tweet::class)->make());
            }
        });
        $users = factory(User::class, 10)->create();
    }
}
