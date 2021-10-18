<?php

namespace Database\Seeders;

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
                'role_id' => NULL,
                'name' => 'Elody Leannon',
                'email' => 'ernser.kathlyn@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'PDnj5L0Igy',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => NULL,
                'name' => 'Antwan DuBuque',
                'email' => 'della46@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ZXun92aPOj',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => NULL,
                'name' => 'Alexzander Shanahan',
                'email' => 'klehner@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'z9ASigHcPG',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => NULL,
                'name' => 'Dr. Cassie Mraz',
                'email' => 'sschroeder@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'fzhdg406YL',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            4 =>
            array (
                'id' => 5,
                'role_id' => NULL,
                'name' => 'Tyrel Ebert',
                'email' => 'wmorissette@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'W1dlnquanf',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            5 =>
            array (
                'id' => 6,
                'role_id' => NULL,
                'name' => 'Mrs. Bernadine D\'Amore V',
                'email' => 'fbergstrom@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'tIKVCDAIFq',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            6 =>
            array (
                'id' => 7,
                'role_id' => NULL,
                'name' => 'Mona Monahan DDS',
                'email' => 'cdubuque@example.net',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'cgoQ6ZaL1p',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            7 =>
            array (
                'id' => 8,
                'role_id' => NULL,
                'name' => 'Rosanna O\'Connell',
                'email' => 'sherwood78@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'twpUUktYdY',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            8 =>
            array (
                'id' => 9,
                'role_id' => NULL,
                'name' => 'Georgiana Brekke',
                'email' => 'lisette22@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'W9Ni6ivjZj',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            9 =>
            array (
                'id' => 10,
                'role_id' => NULL,
                'name' => 'Alexandrea Cronin IV',
                'email' => 'morissette.justus@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-01-09 09:32:50',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '9E7sBY92AH',
                'settings' => NULL,
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            10 =>
            array (
                'id' => 11,
                'role_id' => 1,
                'name' => 'Hein Htet Soe',
                'email' => 'admin@gmail.com',
                'avatar' => 'users/October2021/l9Y0PLrTyheHjJCblo2x.gif',
                'email_verified_at' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-01-09 09:34:29',
                'updated_at' => '2021-10-11 16:58:49',
            ),
            11 =>
            array (
                'id' => 12,
                'role_id' => 2,
                'name' => 'hein',
                'email' => 'hein@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-01-11 14:51:34',
                'updated_at' => '2021-01-11 14:51:34',
            ),
            12 =>
            array (
                'id' => 13,
                'role_id' => 3,
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'avatar' => 'users/January2021/rTpP98A1E7oyiMMU7rjM.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Da94LK3n6lWkMpx8iQBnxnMaLWc82XsDesAmqjs0qsCzDqpvgoJdWzkAzcKQ',
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-01-22 12:55:00',
                'updated_at' => '2021-01-22 12:55:00',
            ),
            13 =>
            array (
                'id' => 14,
                'role_id' => 2,
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FHZClQAs4HLS/qlD3pkao.rpty69z0ukV3fiauB9en4zImIKX94/S',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-09-26 14:01:29',
                'updated_at' => '2021-09-26 14:01:29',
            ),
        ));


    }
}
