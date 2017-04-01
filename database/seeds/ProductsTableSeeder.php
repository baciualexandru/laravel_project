<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'iphone6S',
            'price' => 12000,
            'stock' => 20,
            'category_id' => 1,
        ]);

         DB::table('products')->insert([
            'title' => 'macbook PRO',
            'price' => 1112000,
            'stock' => 10,
            'category_id' => 2,
        ]);
    }
}
