<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Faker\Factory;

class ShowAddress extends Controller
{
    //CQRS - poczytac o tym podejsciu(praca domowa)
    public function __invoke($id)
    {
        $faker = Factory::create(); //wywolanie fakera, pamietaj o imporcie

        $address = [
            'postCode' => $faker->postcode,
            'street' => $faker->streetName,
            'houseNumber' => $faker->numberBetween(1,100),
            'flatNumber' => $faker->numberBetween(1,30)
        ];

        return view('user.address', [
             'address' => $address
        ]);
    }
}
