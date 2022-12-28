<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'to' => 1,
            'from' => 2,
            'body' => '2 -> 1',
            'chatroom_id' => 1,
        ]);
            
        DB::table('messages')->insert([
            'to' => 1,
            'from' => 3,
            'body' => '3 -> 1',
            'chatroom_id' => 2,
        ]);
            
        DB::table('messages')->insert([
            'to' => 2,
            'from' => 1,
            'body' => '1 -> 2',
            'chatroom_id' => 1,
        ]);
            
        DB::table('messages')->insert([
            'to' => 2,
            'from' => 3,
            'body' => '3 -> 2',
            'chatroom_id' => 3,
        ]);
            
        DB::table('messages')->insert([
            'to' => 3,
            'from' => 1,
            'body' => '1 -> 3',
            'chatroom_id' => 2,
        ]);
            
        DB::table('messages')->insert([
            'to' => 3,
            'from' => 2,
            'body' => '2 -> 3',
            'chatroom_id' => 3,
        ]);
    }
}