<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //以下追加
        $param = [
            'id' => 1,
            'content' => 'test1',
            'created_at' => '2022/01/01/',
            'updated_at' => '2022/01/01/'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'id' => 2,
            'content' => 'test2',
            'created_at' => '2022/01/02/',
            'updated_at' => '2022/01/02/'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'id' => 3,
            'content' => 'test3',
            'created_at' => '2022/01/03/',
            'updated_at' => '2022/01/03/'
        ];
        DB::table('todos')->insert($param);
    }
}
