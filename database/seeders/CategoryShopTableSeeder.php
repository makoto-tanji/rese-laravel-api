<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;

class CategoryShopTableSeeder extends Seeder
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
            'category_id' => '1',
            'shop_id' => '1',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '2',
            'shop_id' => '2',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '3',
            'shop_id' => '3',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '4',
            'shop_id' => '4',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '5',
            'shop_id' => '5',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '2',
            'shop_id' => '6',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '4',
            'shop_id' => '7',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '5',
            'shop_id' => '8',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '3',
            'shop_id' => '9',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '1',
            'shop_id' => '10',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '2',
            'shop_id' => '11',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '2',
            'shop_id' => '12',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '3',
            'shop_id' => '13',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '1',
            'shop_id' => '14',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '5',
            'shop_id' => '15',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '3',
            'shop_id' => '16',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '1',
            'shop_id' => '17',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '2',
            'shop_id' => '18',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '4',
            'shop_id' => '19',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            'category_id' => '1',
            'shop_id' => '20',
        ];
        DB::table('category_shop')->insert($param);
    }
}
