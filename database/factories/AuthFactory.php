<?php //

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\FacebookOauth::class, function (Faker $faker) {

    $user_info = [
        $faker->name,
        $faker->streetName,
        $faker->address,
        $faker->country,
        $faker->countryCode
    ];
    
    return [
        'email' => $faker->unique()->safeEmail,
        'user_id' => function(){
                        return factory('App\User')->create()->id;
                    },
        'facebook_id' => (string)$faker->randomNumber,
        'refresh_token' => str_random(50),
        'user_info' => json_encode($user_info),        
    ];
});
