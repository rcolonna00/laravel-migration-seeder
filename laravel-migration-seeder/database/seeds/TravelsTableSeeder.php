<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

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
            
            $new_fake_travel = new Travel();

            $new_fake_travel->name = "Viaggio in: " . $faker->country();
            $new_fake_travel->lastname = $faker->lastName();
            $new_fake_travel->destinations = $faker->country();
            $new_fake_travel->start_date = $faker->dateTimeInInterval('-1 week', '+3 days');
            $new_fake_travel->end_date = $faker->dateTimeInInterval('-1 week', '+3 days');
            $new_fake_travel->description = $faker->paragraph();
            $new_fake_travel->price = $faker->randomFloat(2, 1, 5000);
            $new_fake_travel->country = $faker->country();
            $new_fake_travel->destinations = $faker->city();
            $new_fake_travel->save();
        }
    }
}
