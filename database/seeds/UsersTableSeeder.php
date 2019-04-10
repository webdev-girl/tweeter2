<?php


use Illuminate\Support\str;
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
             {
                 DB::table('users')->insert([
                // 'user_id'=>$factory->create(\App\User::class)->id,

                 'name' => Str::random(10),
                 'email' => Str::random(10).'@gmail.com',
                 'password' => bcrypt('secret'),
                 ]);

            factory(\App\User::class, 50)->create()->each(function ($user) {
                for($i=0; $i<=rand(1,30); $i++) {
                    $user->tweets()->save(factory(\App\Tweet::class)->make());
                }
            });


                    }
                }
