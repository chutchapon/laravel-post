<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Posts();
        $post->user_id = 1;
        $post->category_id = 1;
        $post->thumbnail = "Test Thumbnails";
        $post->title = "vengenful spirit";
        $post->description = "Shendelzare, the Vengeful Spirit, is a ranged agility hero who excels at ganking, disabling, and kill hunts.";
        $post->detail = "Even the most contented Skywrath is an ill-tempered creature, naturally inclined to seek revenge for the slightest insult.";
        $post->save();
    }
}
