<?php

use Illuminate\Database\Seeder;

class MainMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\MainMenu', 6)->create();
    }
}
