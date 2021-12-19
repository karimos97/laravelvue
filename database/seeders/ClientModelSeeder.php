<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Client;
class ClientModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 300; $i++) {

            $faker=Faker::create();
            $client=new Client();
            $client->name=$faker->firstName.' '.$faker->lastName;
            $client->sex=rand(1,2);
            $client->birth_date=$faker->date($format = 'Y-m-d', $max = 'now');
            $client->phone1=$faker->phoneNumber;
            $client->email=$faker->email;
            $client->user_id=rand(1,10);
            $client->save();
    }
    }
}
