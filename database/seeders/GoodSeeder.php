<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            'Name' => 'アンパンマンのキーホルダー',
            'Request' => 'バイキンマンのキーホルダー',
            'Body' => 'アンパンマンのものを所持しておりバイキンマンのものと交換してほしい',
            'status'=> '未',
            'user_id' => 1,
            'title_id' => 1,
        ]);
    }
}
