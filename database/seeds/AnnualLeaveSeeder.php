<?php

use Illuminate\Database\Seeder;

class AnnualLeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\AnnualLeave::class, 10)->create();
    }
}
