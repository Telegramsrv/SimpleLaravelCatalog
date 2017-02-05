<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = new \App\Category([
            'name' => 'Frist category',
            'slug' => 'first_cat',
            'weight' => '1',
        ]);
        $categories->save();


        DB::table('categories')->insert([
            'name' => 'Second category',
            'slug' => 'sec_cat',
            'weight' => '2',
        ]);

    }
}
