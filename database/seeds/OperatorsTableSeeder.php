<?php

use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Operator', 7)->create();
    }
}
