<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'first_title',
            'body' => 'body',
            'slug' => 'first_slug',
        ]);
        DB::table('news')->insert([
            'title' => 'sec_title',
            'body' => 'sec_body',
            'slug' => 'sec_slug',
        ]);
    }
}
