<?php

namespace Database\Seeders;

use App\Models\Product;
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
        for ($i=0;$i<10;$i++){
            $product = new Product();
            $product->name = "hoa qua $i";
            $product->price = rand(100,10000);
            $product->des ='gia re';
            $product->save();
        }
    }
}
