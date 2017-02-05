<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => 'name_title',
            'url' => 'home',
            'weight' => '1',
        ]);
        DB::table('menus')->insert([
            'name' => 'sec_title',
            'url' => 'main',
            'weight' => '2',
        ]);
    }
}
