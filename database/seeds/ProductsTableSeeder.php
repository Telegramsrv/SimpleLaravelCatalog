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
            'category_id' => 1,
            'name' => 'first_prod',
            'slug' => '=>',
            'description' => 'first_desc',
            'image' => '1.jpg',
            'weight' => 1,
            'available' => 1
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'sec_prod',
            'slug' => '=>',
            'description' => 'sec_desc',
            'image' => '2.jpg',
            'weight' => 2,
            'available' => 0
        ]);
    }
}



