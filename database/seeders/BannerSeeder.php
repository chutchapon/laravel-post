<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new \App\Models\Banner();
        $banner->user_id = 1;
        $banner->name = "the international 9";
        $banner->url = "https://cdn1.dotesports.com/wp-content/uploads/2019/08/13130408/26a972ca-3230-406d-9aa9-d31ab9b58e4b-channel_offline_image-1920x1080.jpeg";
        $banner->save();
    }
}
