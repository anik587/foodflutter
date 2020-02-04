<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 11,
                'price' => 39.6,
                'description' => 'Order not paid yet',
                'user_id' => 19,
                'created_at' => '2019-12-15 19:10:13',
                'updated_at' => '2019-12-15 19:10:13',
                'status' => 'Waiting for Client',
                'method' => 'Cash on Delivery',
            ),
            1 => 
            array (
                'id' => 12,
                'price' => 6.82,
                'description' => 'Order not paid yet',
                'user_id' => 20,
                'created_at' => '2019-12-15 19:18:52',
                'updated_at' => '2019-12-15 19:18:52',
                'status' => 'Waiting for Client',
                'method' => 'Pay on Pickup',
            ),
            2 => 
            array (
                'id' => 13,
                'price' => 20.24,
                'description' => 'Order not paid yet',
                'user_id' => 20,
                'created_at' => '2019-12-15 19:19:47',
                'updated_at' => '2019-12-15 19:19:47',
                'status' => 'Waiting for Client',
                'method' => 'Cash on Delivery',
            ),
            3 => 
            array (
                'id' => 14,
                'price' => 20.9,
                'description' => 'Order not paid yet',
                'user_id' => 19,
                'created_at' => '2019-12-15 19:55:29',
                'updated_at' => '2019-12-15 19:55:29',
                'status' => 'Waiting for Client',
                'method' => 'Cash on Delivery',
            ),
            4 => 
            array (
                'id' => 15,
                'price' => 16.5,
                'description' => 'Order not paid yet',
                'user_id' => 19,
                'created_at' => '2019-12-15 20:11:54',
                'updated_at' => '2019-12-16 22:03:38',
                'status' => 'Not Paid',
                'method' => 'Cash on Delivery',
            ),
            5 => 
            array (
                'id' => 18,
                'price' => 27.5,
                'description' => 'Order not paid yet',
                'user_id' => 19,
                'created_at' => '2019-12-15 20:15:55',
                'updated_at' => '2019-12-16 22:03:15',
                'status' => 'Paid',
                'method' => 'Cash on Delivery',
            ),
        ));
        
        
    }
}