<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('stocks')->insert([[
            'quantity'=> '20',
            'net_price'=>'15000',
            'sell_price'=>'32000',
            'date'=>'2022-07-01',
            'product_id'=>'1',
        ],
        [
            'quantity'=> '25',
            'net_price'=>'15000',
            'sell_price'=>'25000',
            'date'=>'2022-07-06',
            'product_id'=>'2',
        ],

        [
            'quantity'=> '30',
            'net_price'=>'15000',
            'sell_price'=>'30000',
            'date'=>'2022-07-06',
            'product_id'=>'2',
        ],

        ]);

    }
}
