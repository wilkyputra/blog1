<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'Nama' => $faker->firstName,
        'Alamat' =>$faker->city,
        'Jenis_Kelamin' =>$faker->randomElement(['L', 'P']),
        'Jurusan' => $faker->randomElement(['islam', 'kristen', 'katolik', 'hindu', 'buddha']),
        'foto' => $faker->picsum('public/image', 400, 400, false)
    ];
});