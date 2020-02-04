<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'id' => 21,
                'food_id' => 2,
                'user_id' => 19,
                'quantity' => 1,
                'delivery_address_id' => NULL,
                'created_at' => '2019-12-15 20:30:59',
                'updated_at' => '2019-12-15 20:30:59',
            ),
        ));
        
        
    }
}