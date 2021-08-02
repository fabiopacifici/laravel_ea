<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Game;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $titles = ['Star wars fallen order', 'Mass effect leggendary edition', 'Fifa 22', 'Madden 22', 'Battle field 2042', 'The sims 4', 'Apex Legends', 'Need for speed payback', 'Anthem'];

        for ($i = 0; $i  < 9; $i++) {
            $game = new Game();
            $game->name = $titles[$i];
            $game->thumb =  'placeholders/' . $faker->image('storage/app/public/placeholders', 400, 400, 'Game', false, true, $game->name);
            $game->save();
        }

    }
}
