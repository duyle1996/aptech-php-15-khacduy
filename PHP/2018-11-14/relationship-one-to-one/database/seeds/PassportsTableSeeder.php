<?php

use Illuminate\Database\Seeder;

class PassportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
        $passports = App\User::pluck('id');
        foreach ($passports as $key => $value) {
            App\Passport::create([
                'number' => $faker->creditCardNumber,
                'user_id' => $value,
            ]);
        }
    }
}
