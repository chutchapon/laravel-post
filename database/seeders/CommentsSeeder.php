<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new \App\Models\Comments();
        $comment->user_id = 1;
        $comment->post_id = 1;
        $comment->detail = "Nice Posts";
        $comment->save();
    }
}
