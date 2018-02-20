<?php

use Illuminate\Database\Seeder;
use database\seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
