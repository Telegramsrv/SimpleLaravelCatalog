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
            'name' => 'first_cat',
            'slug' => '=>',
            'weight' => '1',
        ]);
        $categories->save();


        DB::table('categories')->insert([
            'name' => 'sec_cat',
            'slug' => '=>',
            'weight' => '2',
        ]);

    }
}
