<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {

            $classes = [
                'First Class',
                'Business Class',
                'Economy Class'
            ];

            $airline_companies = [
                'Ryanair',
                'Wizz Air',
                'Volotea',
                'EasyJet',
                'Vueling Airlines',
                'Lufthansa'
            ];

            $hotel_names = [
                'Crowne Plaza',
                'Emerald Bay Inn',
                'Hotel Bliss',
                'The New View',
                'Ramada Limited & Suites',
                'Sunset Lodge',
                'Hotel Elite',
                'Lake Place Inn',
                'Beacon Motel',
                'Comfort B&B'
            ];

            $new_travel = new Travel();
            $new_travel->place_of_departure = $faker->city();
            $new_travel->place_of_destination = $faker->city();
            $new_travel->departure_date = $faker->dateTime();
            $new_travel->return_date = $faker->dateTime();
            $new_travel->airline_company = $airline_companies[rand(0, count($airline_companies) - 1)];
            $new_travel->class = $classes[rand(0, count($classes) - 1)];
            $new_travel->travelers = rand(1, 5);
            $new_travel->hotel_name = $hotel_names[rand(0, count($hotel_names) - 1)];
            $new_travel->rooms = rand(1, 4);
            $new_travel->hotel_stars = rand(1, 5);
            $new_travel->price = rand(500, 3000);
            $new_travel->save();
        }
    }
}
