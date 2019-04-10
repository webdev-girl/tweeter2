<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\UserDetail::class, function (Faker $faker) {
    return [

              // 'username' => preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
              // 'first_name' =>$faker->FirstName,
              // 'last_name' =>$faker->Lastname,
              // 'phone'=>$faker->PhoneNumber,
              // 'dob' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')
              //       ->format('Y/m/d'), // outputs something like 17/09/2001
              // 'gender' => $faker->randomElement($array = array ('male', 'female')) ,
              // 'country' => $faker->country,
    ];
});
