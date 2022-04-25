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
            // 'category_id' => '1',
            'category_id' => '4',
            // 'shop_id' => '1',
            'shop_id' => '4',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '2',
            'category_id' => '14',
            // 'shop_id' => '2',
            'shop_id' => '14',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '3',
            'category_id' => '24',
            // 'shop_id' => '3',
            'shop_id' => '24',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '4',
            'category_id' => '34',
            // 'shop_id' => '4',
            'shop_id' => '34',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '5',
            'category_id' => '44',
            // 'shop_id' => '5',
            'shop_id' => '44',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '2',
            'category_id' => '14',
            // 'shop_id' => '6',
            'shop_id' => '54',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '4',
            'category_id' => '34',
            // 'shop_id' => '7',
            'shop_id' => '64',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '5',
            'category_id' => '44',
            // 'shop_id' => '8',
            'shop_id' => '74',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '3',
            'category_id' => '24',
            // 'shop_id' => '9',
            'shop_id' => '84',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '1',
            'category_id' => '4',
            // 'shop_id' => '10',
            'shop_id' => '94',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '2',
            'category_id' => '14',
            // 'shop_id' => '11',
            'shop_id' => '104',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '2',
            'category_id' => '14',
            // 'shop_id' => '12',
            'shop_id' => '114',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '3',
            'category_id' => '24',
            // 'shop_id' => '13',
            'shop_id' => '124',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '1',
            'category_id' => '4',
            // 'shop_id' => '14',
            'shop_id' => '134',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '5',
            'category_id' => '44',
            // 'shop_id' => '15',
            'shop_id' => '144',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '3',
            'category_id' => '24',
            // 'shop_id' => '16',
            'shop_id' => '154',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '1',
            'category_id' => '4',
            // 'shop_id' => '17',
            'shop_id' => '164',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '2',
            'category_id' => '14',
            // 'shop_id' => '18',
            'shop_id' => '174',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '4',
            'category_id' => '34',
            // 'shop_id' => '19',
            'shop_id' => '184',
        ];
        DB::table('category_shop')->insert($param);
        $param = [
            // 'category_id' => '1',
            'category_id' => '4',
            // 'shop_id' => '20',
            'shop_id' => '194',
        ];
        DB::table('category_shop')->insert($param);
    }
}
