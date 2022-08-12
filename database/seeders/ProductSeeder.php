<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // THIS METHOD IS USED FOR INTERNAL THINGS
        // LIKE CREATING ACCOUNTS FOR YOUR TEAM SO
        // THEY DON'T HAVE TO GO THROUGH THE SIGNUP
        // PROCESS
        /*\DB::table('products')->insert([
            'name' => "playstation 5",
            'description' => "bijna nieuw, 1 keer gebruikt",
            'price' => 400,
            'sellerId' => 1
        ]);*/

        // THIS METHOD IS DONE BY USING MODELS
        /*
        $product = new \App\Models\Product();
        $product->name = "iPhone 10";
        $product->description = "klein krasje op het scherm (zie foto)";
        $product->price = 350;
        $product->sellerId = 1;
        $product->save();*/
    }
}
