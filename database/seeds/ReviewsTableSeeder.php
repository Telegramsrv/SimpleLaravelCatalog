<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'product_id' => '1',
            'user_name' => 'name',
            'email' => str_random(10).'@gmail.com',
            'text' => str_random(20),
            'star' => 1,
        ]);
        DB::table('reviews')->insert([
            'product_id' => '1',
            'user_name' => 'name',
            'email' => str_random(10).'@gmail.com',
            'text' => str_random(20),
            'star' => 2,
        ]);
    }
}

