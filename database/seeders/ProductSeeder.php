<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 200; $i++)
            Product::create([
                'name' => $faker->name,
                'qty' => $faker->numberBetween(1, 100),
                'price' => $faker->numberBetween(10000, 30000),
                'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-family-select-2021?wid=940&amp;hei=1112&amp;fmt=jpeg&amp;qlt=80&amp;.v=1617135051000'
            ]);


    }
}
