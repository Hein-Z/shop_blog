<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-09 09:46:14',
                'updated_at' => '2021-01-09 09:46:14',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-09 09:46:14',
                'updated_at' => '2021-01-09 09:46:14',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-09 09:46:14',
                'updated_at' => '2021-01-09 09:46:14',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-09 09:46:14',
                'updated_at' => '2021-01-09 09:46:14',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-09 09:46:14',
                'updated_at' => '2021-01-09 09:46:14',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2021-01-12 11:55:25',
                'updated_at' => '2021-01-12 11:55:25',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2021-01-12 11:55:25',
                'updated_at' => '2021-01-12 11:55:25',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2021-01-12 11:55:25',
                'updated_at' => '2021-01-12 11:55:25',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2021-01-12 11:55:25',
                'updated_at' => '2021-01-12 11:55:25',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2021-01-12 11:55:25',
                'updated_at' => '2021-01-12 11:55:25',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_category',
                'table_name' => 'category',
                'created_at' => '2021-01-12 11:56:29',
                'updated_at' => '2021-01-12 11:56:29',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_category',
                'table_name' => 'category',
                'created_at' => '2021-01-12 11:56:29',
                'updated_at' => '2021-01-12 11:56:29',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_category',
                'table_name' => 'category',
                'created_at' => '2021-01-12 11:56:29',
                'updated_at' => '2021-01-12 11:56:29',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_category',
                'table_name' => 'category',
                'created_at' => '2021-01-12 11:56:29',
                'updated_at' => '2021-01-12 11:56:29',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_category',
                'table_name' => 'category',
                'created_at' => '2021-01-12 11:56:29',
                'updated_at' => '2021-01-12 11:56:29',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_coupons',
                'table_name' => 'coupons',
                'created_at' => '2021-05-21 18:07:01',
                'updated_at' => '2021-05-21 18:07:01',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_coupons',
                'table_name' => 'coupons',
                'created_at' => '2021-05-21 18:07:01',
                'updated_at' => '2021-05-21 18:07:01',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_coupons',
                'table_name' => 'coupons',
                'created_at' => '2021-05-21 18:07:01',
                'updated_at' => '2021-05-21 18:07:01',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_coupons',
                'table_name' => 'coupons',
                'created_at' => '2021-05-21 18:07:01',
                'updated_at' => '2021-05-21 18:07:01',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_coupons',
                'table_name' => 'coupons',
                'created_at' => '2021-05-21 18:07:01',
                'updated_at' => '2021-05-21 18:07:01',
            ),
        ));
        
        
    }
}