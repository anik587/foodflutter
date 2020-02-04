<?php

use Illuminate\Database\Seeder;

class DeliveryAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('delivery_addresses')->delete();
        
        \DB::table('delivery_addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Home Address',
                'address' => 'Rue de Dunkerque',
                'latitude' => '132',
                'longitude' => '6.584',
                'is_default' => 1,
                'user_id' => 19,
                'created_at' => '2019-12-06 15:30:23',
                'updated_at' => '2019-12-06 16:23:20',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'Work Address',
                'address' => '4722 Villa Drive',
                'latitude' => '136',
                'longitude' => '-122.086749655962',
                'is_default' => 0,
                'user_id' => 19,
                'created_at' => '2019-12-06 16:23:03',
                'updated_at' => '2019-12-06 16:23:25',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'Delivery Adr',
                'address' => '12 Adr City Hall New Work',
                'latitude' => NULL,
                'longitude' => NULL,
                'is_default' => 1,
                'user_id' => 20,
                'created_at' => '2019-12-15 19:18:47',
                'updated_at' => '2019-12-15 19:18:47',
            ),
        ));
        
        
    }
}