<?php

$factory->define(App\Http\Model\Cliente::class, function (Faker\Generator $faker) {
	return [

		'nome' => $faker->name,
		'numero' => $faker->buildingNumber,
		'telefone' => $faker->cellphone
	];
});
