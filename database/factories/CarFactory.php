<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Car::class, function (Faker $faker) {
    $statuses = ["New","Blocked", "Seled"];
    return [
        'title'=>$faker->text(255),
        'short_text'=>$faker->text(),
        'full_text'=>$faker->text(500),
        'status'=>$faker->randomElement($statuses),
        'model_id'=>$faker->numberBetween(1,1188),
        'year'=>random_int(2000,2018),
        'photo_id'=>null
    ];
});
