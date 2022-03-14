<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
            'category_name' => '寿司',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'category_name' => '焼肉',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'category_name' => '居酒屋',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'category_name' => 'イタリアン',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'category_name' => 'ラーメン',
        ];
        DB::table('categories')->insert($param);
    }
}
