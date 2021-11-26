<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag_post = new \App\Models\Tag_Post();
        $tag_post->tag_id = 1;
        $tag_post->post_id = 1;
        $tag_post->save();
    }
}
