<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=Product::create([
           'name'=>'Reiki healing',
            'price'=>'400',
            'description'=>'awesome book'
        ]);

        $product = Product::create([
           'name'=>'Car',
           'price'=>'4500',
           'description'=>'white car'
        ]);
    }
}
