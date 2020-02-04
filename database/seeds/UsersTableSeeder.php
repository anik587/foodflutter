<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Michael E. Quinn',
                'email' => 'admin@demo.com',
                'password' => '$2y$10$YOn/Xq6vfvi9oaixrtW8QuM2W0mawkLLqIxL.IoGqrsqOqbIsfBNu',
                'api_token' => 'PivvPlsQWxPl1bB5KrbKNBuraJit0PrUZekQUgtLyTRuyBq921atFtoR1HuA',
                'remember_token' => 'T4PQhFvBcAA7k02f7ejq4I7z7QKKnvxQLV0oqGnuS6Ktz6FdWULrWrzZ3oYn',
                'created_at' => '2018-08-06 22:58:41',
                'updated_at' => '2019-09-27 07:49:45',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            1 => 
            array (
                'id' => 18,
                'name' => 'Barbara J. Glanz',
                'email' => 'manager@demo.com',
                'password' => '$2y$10$YOn/Xq6vfvi9oaixrtW8QuM2W0mawkLLqIxL.IoGqrsqOqbIsfBNu',
                'api_token' => 'tVSfIKRSX2Yn8iAMoUS3HPls84ycS8NAxO2dj2HvePbbr4WHorp4gIFRmFwB',
                'remember_token' => '5nysjzVKI4LU92bjRqMUSYdOaIo1EcPC3pIMb6Tcj2KXSUMriGrIQ1iwRdd0',
                'created_at' => '2018-08-14 17:06:28',
                'updated_at' => '2019-09-25 22:09:35',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            2 => 
            array (
                'id' => 19,
                'name' => 'Charles W. Abeyta',
                'email' => 'client@demo.com',
                'password' => '$2y$10$EBubVy3wDbqNbHvMQwkj3OTYVitL8QnHvh/zV0ICVOaSbALy5dD0K',
                'api_token' => 'fXLu7VeYgXDu82SkMxlLPG1mCAXc4EBIx6O5isgYVIKFQiHah0xiOHmzNsBv',
                'remember_token' => 'V6PIUfd8JdHT2zkraTlnBcRSINZNjz5Ou7N0WtUGRyaTweoaXKpSfij6UhqC',
                'created_at' => '2019-10-12 22:31:26',
                'updated_at' => '2019-12-15 20:28:47',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => 'dTMfmPxjyTE:APA91bFbCynDTcaQ-o8gvfkGQVB8oUKvUsLm6DUgSH1hcxmfvUangE3Zl24PX11wnDDvAxNhmz_A9tp60VeoH3TLXaN-x7N9ipgoGcMtW3rCwW2jkfv0RirbbhY3S4MUF7Ejq4ZlcpnO',
            ),
            3 => 
            array (
                'id' => 20,
                'name' => 'Robert E. Brock',
                'email' => 'client1@demo.com',
                'password' => '$2y$10$pmdnepS1FhZUMqOaFIFnNO0spltJpziz3j13UqyEwShmLhokmuoei',
                'api_token' => 'Czrsk9rwD0c75NUPkzNXM2WvbxYHKj8p0nG29pjKT0PZaTgMVzuVyv4hOlte',
                'remember_token' => NULL,
                'created_at' => '2019-10-15 17:55:39',
                'updated_at' => '2019-10-16 19:31:46',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            4 => 
            array (
                'id' => 22,
                'name' => 'Robert E. Brock',
                'email' => 'driver@demo.com',
                'password' => '$2y$10$T/jwzYDJfC8c9CdD5PbpuOKvEXlpv4.RR1jMT0PgIMT.fzeGw67JO',
                'api_token' => 'OuMsmU903WMcMhzAbuSFtxBekZVdXz66afifRo3YRCINi38jkXJ8rpN0FcfS',
                'remember_token' => NULL,
                'created_at' => '2019-12-15 18:49:44',
                'updated_at' => '2019-12-16 22:01:21',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => 'eRN8OcCW_Zg:APA91bECHClevd8nrH4rf71DzhV7NQz-QzFBjZpdkZRqhTuYBbmcMi3puU5abCwa34Z2sr1HuJYMgglS_ZO7repodrQUrDICAitH3bjJ_uVy_3qEjtu_xajBHuzbt0Lg7THt-xY47t5d',
            ),
        ));
        
        
    }
}