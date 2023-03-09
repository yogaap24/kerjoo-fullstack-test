<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AnnualLeave;
use Faker\Generator as Faker;

$factory->define(AnnualLeave::class, function (Faker $faker) {
    $totalUser = count(\App\User::all()->toArray());
    $start = $faker->dateTimeBetween('next Monday', 'next Monday +7 days');
    $end = $faker->dateTimeBetween($start, $start->format('Y-m-d H:i:s').' +10 days');

    return [
        'user_id'     => $faker->numberBetween(1, $totalUser),
        'reason'      => $faker->sentence,
        'start_date'  => $start,
        'end_date'    => $end
    ];
});
