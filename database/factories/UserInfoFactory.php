<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\UserInfo;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        
        'phone' => $faker -> phoneNumber,
        'address' => $faker -> address
    ];
});
