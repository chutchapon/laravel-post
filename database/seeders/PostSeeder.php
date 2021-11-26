<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Post();
        $post->user_id = 1;
        $post->category_id = 2;
        $post->thumbnail = "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/alchemist.png";
        $post->title = "Ancient Apparittion";
        $post->description = "Able to launch a powerful blast of damaging ice across the battlefield, Ancient Apparition threatens to shatter weakened enemies wherever they are.";
        $post->detail = "Kaldr, the Ancient Apparition, is an image projected from outside time. He springs from the cold, infinite void that both predates the universe and awaits its end.";
        $post->save();
    }
}
