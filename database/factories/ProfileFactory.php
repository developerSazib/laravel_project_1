<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
	$user = User::all();
    return [
    	'user_id' 			=> $user->random()->id,
        'father_name' 		=> $faker->name('male'),
        'mother_name' 		=> $faker->name('female'),
        'birth_date' 		=> \carbon\carbon::now()->subYear(random_int(18, 50))->addMonth(random_int(0, 11))->addDay(random_int(0, 28))->toDateString(),
        'profile_picture' 	=> $faker->imageUrl(),
        'bio' 				=> $faker->paragraph

    ];
});
