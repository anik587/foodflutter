<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 31,
                'user_id' => 19,
                'order_status_id' => 1,
                'tax' => 10.0,
                'hint' => '',
                'created_at' => '2019-12-15 19:10:13',
                'updated_at' => '2019-12-15 20:32:00',
                'payment_id' => 11,
                'delivery_address_id' => NULL,
                'driver_id' => 22,
            ),
            1 => 
            array (
                'id' => 32,
                'user_id' => 20,
                'order_status_id' => 1,
                'tax' => 10.0,
                'hint' => '',
                'created_at' => '2019-12-15 19:18:52',
                'updated_at' => '2019-12-16 22:03:52',
                'payment_id' => 12,
                'delivery_address_id' => 3,
                'driver_id' => 22,
            ),
            2 => 
            array (
                'id' => 33,
                'user_id' => 20,
                'order_status_id' => 1,
                'tax' => 10.0,
                'hint' => '',
                'created_at' => '2019-12-15 19:19:47',
                'updated_at' => '2019-12-15 19:19:47',
                'payment_id' => 13,
                'delivery_address_id' => 3,
                'driver_id' => NULL,
            ),
            3 => 
            array (
                'id' => 34,
                'user_id' => 19,
                'order_status_id' => 1,
                'tax' => 10.0,
                'hint' => '',
                'created_at' => '2019-12-15 19:55:29',
                'updated_at' => '2019-12-15 19:55:29',
                'payment_id' => 14,
                'delivery_address_id' => 1,
                'driver_id' => NULL,
            ),
            4 => 
            array (
                'id' => 35,
                'user_id' => 19,
                'order_status_id' => 3,
                'tax' => 10.0,
                'hint' => '',
                'created_at' => '2019-12-15 20:11:54',
                'updated_at' => '2019-12-16 22:03:34',
                'payment_id' => 15,
                'delivery_address_id' => 1,
                'driver_id' => 22,
            ),
            5 => 
            array (
                'id' => 38,
                'user_id' => 19,
                'order_status_id' => 5,
                'tax' => 10.0,
                'hint' => '',
                'created_at' => '2019-12-15 20:15:55',
                'updated_at' => '2019-12-16 22:03:12',
                'payment_id' => 18,
                'delivery_address_id' => 1,
                'driver_id' => 22,
            ),
        ));
        
        
    }
}