<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'New Notification Form hola',
                'notification_type_id' => 2,
                'user_id' => 1,
                'read' => 1,
                'created_at' => '2019-09-04 14:10:55',
                'updated_at' => '2019-09-04 14:10:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Notification from hola',
                'notification_type_id' => 1,
                'user_id' => 18,
                'read' => 0,
                'created_at' => '2019-10-09 13:45:59',
                'updated_at' => '2019-10-09 13:45:59',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Your order #31 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-15 19:10:13',
                'updated_at' => '2019-12-15 19:10:13',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Your order #32 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 20,
                'read' => 0,
                'created_at' => '2019-12-15 19:18:52',
                'updated_at' => '2019-12-15 19:18:52',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Your order #33 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 20,
                'read' => 0,
                'created_at' => '2019-12-15 19:19:47',
                'updated_at' => '2019-12-15 19:19:47',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Your order #34 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-15 19:55:29',
                'updated_at' => '2019-12-15 19:55:29',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Your order #35 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-15 20:11:54',
                'updated_at' => '2019-12-15 20:11:54',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Your order #36 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-15 20:12:02',
                'updated_at' => '2019-12-15 20:12:02',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Your order #37 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-15 20:12:07',
                'updated_at' => '2019-12-15 20:12:07',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Your order #38 was received successfully',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-15 20:15:55',
                'updated_at' => '2019-12-15 20:15:55',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Your order #38 was Delivered',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-16 22:03:14',
                'updated_at' => '2019-12-16 22:03:14',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Your order #35 was Ready',
                'notification_type_id' => 1,
                'user_id' => 19,
                'read' => 0,
                'created_at' => '2019-12-16 22:03:36',
                'updated_at' => '2019-12-16 22:03:36',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Order #35 was assigned to you',
                'notification_type_id' => 2,
                'user_id' => 22,
                'read' => 0,
                'created_at' => '2019-12-16 22:03:38',
                'updated_at' => '2019-12-16 22:03:38',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Order #32 was assigned to you',
                'notification_type_id' => 2,
                'user_id' => 22,
                'read' => 0,
                'created_at' => '2019-12-16 22:03:54',
                'updated_at' => '2019-12-16 22:03:54',
            ),
        ));
        
        
    }
}