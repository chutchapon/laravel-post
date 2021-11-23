<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new \App\Models\Banners();
        $banner->user_id = 1;
        $banner->name = "vengenful spirit";
        $banner->url = "https://i.imgur.com/NYb9FIz.jpg";
        $banner->save();
    }
}
