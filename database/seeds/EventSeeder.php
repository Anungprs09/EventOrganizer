<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'Event wibu',
            'detail' => 'untuk semua wibu di indo',
            'description' => 'usia 18 tahunn',
            'start' => '19:00:00',
            'finish' => '21:00:00',
            'quota' => '5',
            'image' => 'poto.jpg'
        ]);
    
    }
}
