<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
    }
    factory(App\User::class, 5)->create()->each(function ($user) {
        for($i=0; $i<=rand(1, 20); $i++) {
            $user->tweets()->save(factory(App\Tweet::class)->make());
        }
}
