<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialService;

class SocialServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialService::create(['name' => 'Instagram Followers', 'price_per_1000' => 10.00]);
        SocialService::create(['name' => 'Twitter Followers', 'price_per_1000' => 8.00]);
        SocialService::create(['name' => 'Facebook Likes', 'price_per_1000' => 5.00]);
    }
}