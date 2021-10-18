<?php

namespace Database\Seeders;

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
                'id' => 7,
                'user_id' => NULL,
                'billing_email' => 'customer@gmail.com',
                'billing_name' => 'customer1',
                'billing_address' => 'no19, Kyeemyindine, NyeinChanYay Street',
                'billing_city' => 'Yangon',
                'billing_province' => 'Yangon',
                'billing_postalcode' => '11101',
                'billing_phone' => '09422311212',
                'billing_name_on_card' => 'customer',
                'billing_discount' => 0,
                'billing_discount_code' => NULL,
                'billing_subtotal' => 901,
                'billing_tax' => 45,
                'billing_total' => 946,
                'payment_gateway' => 'stripe',
                'shipped' => 1,
                'error' => NULL,
                'created_at' => '2021-01-22 15:59:04',
                'updated_at' => '2021-10-06 17:31:11',
            ),
            1 => 
            array (
                'id' => 8,
                'user_id' => NULL,
                'billing_email' => 'customer2@gmail.com',
                'billing_name' => 'customer2',
                'billing_address' => 'No 19, HteeTan Street, Kyeemyindine Yangon,',
                'billing_city' => 'Yangon',
                'billing_province' => 'Yangon',
                'billing_postalcode' => '11101',
                'billing_phone' => '09960179228',
                'billing_name_on_card' => 'Customer2',
                'billing_discount' => 30,
                'billing_discount_code' => 'ABCDEFG',
                'billing_subtotal' => 3297,
                'billing_tax' => 165,
                'billing_total' => 3462,
                'payment_gateway' => 'stripe',
                'shipped' => 0,
                'error' => NULL,
                'created_at' => '2021-10-06 17:29:56',
                'updated_at' => '2021-10-06 17:30:46',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 11,
                'billing_email' => 'admin@gmail.com',
                'billing_name' => 'Hein Htet Soe',
                'billing_address' => 'No 19, HteeTan Street, Kyeemyindine Yangon,',
                'billing_city' => 'Yangon',
                'billing_province' => 'Yangon',
                'billing_postalcode' => '11101',
                'billing_phone' => '09233234423',
                'billing_name_on_card' => 'Hein Htet Soe',
                'billing_discount' => 0,
                'billing_discount_code' => '',
                'billing_subtotal' => 600,
                'billing_tax' => 30,
                'billing_total' => 630,
                'payment_gateway' => 'stripe',
                'shipped' => 0,
                'error' => NULL,
                'created_at' => '2021-10-10 12:55:43',
                'updated_at' => '2021-10-10 12:55:43',
            ),
            3 => 
            array (
                'id' => 10,
                'user_id' => 11,
                'billing_email' => 'admin@gmail.com',
                'billing_name' => 'customer',
                'billing_address' => 'No 19, HteeTan Street, Kyeemyindine Yangon,',
                'billing_city' => 'Yangon',
                'billing_province' => 'Yangon',
                'billing_postalcode' => '11101',
                'billing_phone' => '09599601792',
                'billing_name_on_card' => 'customer',
                'billing_discount' => 0,
                'billing_discount_code' => '',
                'billing_subtotal' => 2347,
                'billing_tax' => 117,
                'billing_total' => 2464,
                'payment_gateway' => 'stripe',
                'shipped' => 0,
                'error' => NULL,
                'created_at' => '2021-10-11 16:57:53',
                'updated_at' => '2021-10-11 16:57:53',
            ),
        ));
        
        
    }
}