<?php

use Illuminate\Database\Seeder;

class FoodOrderExtrasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food_order_extras')->delete();
        
        \DB::table('food_order_extras')->insert(array (
            0 => 
            array (
                'food_order_id' => 41,
                'extra_id' => 4,
                'price' => 0.0,
            ),
            1 => 
            array (
                'food_order_id' => 45,
                'extra_id' => 1,
                'price' => 0.0,
            ),
            2 => 
            array (
                'food_order_id' => 45,
                'extra_id' => 2,
                'price' => 0.0,
            ),
            3 => 
            array (
                'food_order_id' => 47,
                'extra_id' => 1,
                'price' => 0.0,
            ),
        ));
        
        
    }
}