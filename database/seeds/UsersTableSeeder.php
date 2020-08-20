<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Muhamad Afdal Yaasin',
            'username' => 'afdal',
            'password' => bcrypt('password'),
            'email' => 'afdal@parsinta.com',
        ]);
    }
}
