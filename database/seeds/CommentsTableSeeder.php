<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Comment::create([
                'user_id' => 5,
                'tweet_id' => $i * 10 + 5,
                'text' => 'テストコメント' . $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}