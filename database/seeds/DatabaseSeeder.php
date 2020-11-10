<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OperatorsTableSeeder::class);
        $this->call(MainMenusTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
