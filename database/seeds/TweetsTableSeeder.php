<?php

use Illuminate\Database\Seeder;
use App\Models\Tweet;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 1; $i <= 10; $i++) {
        for ($i = 0; $i < 10; $i++) {
            Tweet::create([
                // 'user_id'    => $i,
                'user_id'    => $i * 10 + 5,
                'text'       => 'テスト投稿' . $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}