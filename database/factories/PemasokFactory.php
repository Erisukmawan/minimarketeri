<?php

use Faker\Generator as Faker;

$factory->define(App\Pemasok::class, function (Faker $faker) {
    return [
        'kode_pemasok' => $faker->numberBetween(1000,100000),
        'nama_pemasok' => $faker->company,
        'alamat'=> $faker->address,
        'kota'=> $faker->city,
        'no_telp'=> $faker->phoneNumber
    ];
});
