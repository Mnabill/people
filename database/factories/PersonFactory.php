<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\person;
use Faker\Generator as Faker;

$factory->define(person::class, function (Faker $faker) {
    return [
        'frist_name' => $faker-> firstName ,
        'last_name'=> $faker-> lastName,
        'email'=> $faker-> safeEmail,
        'phone'=> $faker-> phoneNumber,
        'city'=> $faker-> city,
    ];
});
