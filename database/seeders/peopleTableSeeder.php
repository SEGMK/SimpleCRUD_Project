<?php

namespace Database\Seeders;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;

class peopleTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName,
                'lastName' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'street' => $faker->streetAddress,
                'city/conutry' => $faker->city
            ]);
        }
    }
}
