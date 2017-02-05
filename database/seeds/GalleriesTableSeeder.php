<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'product_id' => '1',
            'image' => 'imagejpg',
            'weight' => '1',
        ]);
        DB::table('galleries')->insert([
            'product_id' => '1',
            'image' => '1image.jpg',
            'weight' => '2',
        ]);
    }
}
