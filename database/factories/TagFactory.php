<?php

use Faker\Generator as Faker;

$factory->define(App\Tags::class, function (Faker $faker) {
    return [
       		'name'=> $faker->text(50),
            'about'=> $faker->text('100'),
            'status'=> $faker->text('50'),
            'order'=> $faker->text('50'),
            'course_id'=> $faker->text('23'),
            'user_id'=> $faker->text('5'),
    ];
});
