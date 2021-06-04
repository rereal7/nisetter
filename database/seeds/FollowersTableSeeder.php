<?php

use Illuminate\Database\Seeder;
use App\Models\Follower;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            Follower::create([
                'following_id' => $i * 10 + 5,
                'followed_id' => 5
            ]);
        }
    }
}