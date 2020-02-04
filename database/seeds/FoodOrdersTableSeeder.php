<?php

use Illuminate\Database\Seeder;

class FoodOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food_orders')->delete();
        
        \DB::table('food_orders')->insert(array (
            0 => 
            array (
                'id' => 40,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 31,
                'created_at' => '2019-12-15 19:10:13',
                'updated_at' => '2019-12-15 19:10:13',
            ),
            1 => 
            array (
                'id' => 41,
                'price' => 21.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 31,
                'created_at' => '2019-12-15 19:10:13',
                'updated_at' => '2019-12-15 19:10:13',
            ),
            2 => 
            array (
                'id' => 42,
                'price' => 6.2,
                'quantity' => 1,
                'food_id' => 4,
                'order_id' => 32,
                'created_at' => '2019-12-15 19:18:52',
                'updated_at' => '2019-12-15 19:18:52',
            ),
            3 => 
            array (
                'id' => 43,
                'price' => 7.4,
                'quantity' => 1,
                'food_id' => 5,
                'order_id' => 33,
                'created_at' => '2019-12-15 19:19:47',
                'updated_at' => '2019-12-15 19:19:47',
            ),
            4 => 
            array (
                'id' => 44,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 33,
                'created_at' => '2019-12-15 19:19:47',
                'updated_at' => '2019-12-15 19:19:47',
            ),
            5 => 
            array (
                'id' => 45,
                'price' => 19.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 34,
                'created_at' => '2019-12-15 19:55:29',
                'updated_at' => '2019-12-15 19:55:29',
            ),
            6 => 
            array (
                'id' => 46,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 35,
                'created_at' => '2019-12-15 20:11:54',
                'updated_at' => '2019-12-15 20:11:54',
            ),
            7 => 
            array (
                'id' => 47,
                'price' => 14.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 38,
                'created_at' => '2019-12-15 20:15:55',
                'updated_at' => '2019-12-15 20:15:55',
            ),
            8 => 
            array (
                'id' => 48,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 38,
                'created_at' => '2019-12-15 20:15:55',
                'updated_at' => '2019-12-15 20:15:55',
            ),
        ));
        
        
    }
}