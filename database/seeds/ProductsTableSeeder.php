<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Se encarga de alimentar la base de datos.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(Product::class, 10)->create;
    }
}
