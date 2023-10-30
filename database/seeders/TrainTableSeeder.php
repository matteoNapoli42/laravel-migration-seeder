<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

require_once 'vendor/autoload.php';

use Faker\Generator as Faker;

use App\Models\Trains;

class TrainTableSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        /*
        $table->id();
            $table->string('society', 30);
            $table->string('departure_station', 55);
            $table->string('arrival_station', 55);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 10);
            $table->smallInteger('carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');
            $table->timestamps();
        */

        for ($i = 0; $i < 10; $i++) {
            $train = new Trains();
            $train->society = $faker->word();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->word(10);
            $train->carriages = $faker->numberBetween(1, 10);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
