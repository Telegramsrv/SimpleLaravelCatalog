<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'image' => 'slider1.jpg',
            'weight' => '1',
            'url' => 'slider1',
            'available' => 1
        ]);
        DB::table('sliders')->insert([
            'image' => 'slider1.jpg',
            'weight' => '2',
            'url' => 'slider2',
            'available' => 0
        ]);
    }
}

