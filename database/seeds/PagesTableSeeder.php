<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => 'first_title',
            'slug' => '=>',
            'body' => 'first_body',
        ]);
        DB::table('pages')->insert([
            'title' => 'sec_title',
            'slug' => '=>',
            'body' => 'sec_body',
        ]);
    }
}
