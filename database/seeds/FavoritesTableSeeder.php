<?php

use Illuminate\Database\Seeder;
use App\Models\Favorite;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Favorite::create([
                'user_id' => 5,
                'tweet_id' => $i * 10 + 5
            ]);
        }
    }
}