<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('chatrooms')->insert([
             'user1' => 1,
             'user2' => 2,
             'merchandise_id' => 1,
         ]);
        
         DB::table('chatrooms')->insert([
             'user1' => 1,
             'user2' => 3,
             'merchandise_id' => 1,
         ]);
        
        
         DB::table('chatrooms')->insert([
             'user1' => 2,
             'user2' => 3,
             'merchandise_id' => 1,
         ]);
        
    }
}
