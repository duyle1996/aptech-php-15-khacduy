<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'Name' => $faker->username,
                'Email' => $faker->email,
                'Password' => $faker->password,
            ]);
        }
    }
}