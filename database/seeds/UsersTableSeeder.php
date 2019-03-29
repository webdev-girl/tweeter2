<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        // 'name' => Str::random(10),
        // 'email' => Str::random(10).'@gmail.com',
        // 'password' => bcrypt('secret'),
        // ]);
        //
        // factory(App\User::class, 5)->create()->each(function ($user) {
        //     for($i=0; $i<=rand(1, 20); $i++) {
        //         $user->tweets()->save(factory(App\Tweet::class)->make());
        //     }
        //
        // });
    }
}
