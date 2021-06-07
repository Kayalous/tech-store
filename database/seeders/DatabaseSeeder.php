<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use http\Client\Curl\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'email' => 'aelkayal88@gmail.com'
        ]);

        $this->call([ProductSeeder::class]);

        $user = \App\Models\User::all()->first();

        \App\Models\Cart::create([
            'user_id' => $user->id,
        ]);

        for ($i = 0; $i < 5; $i++)
            $user->cart->products()->attach(Product::all()->random());
    }
}
