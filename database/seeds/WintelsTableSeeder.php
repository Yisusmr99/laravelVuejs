<?php

use Illuminate\Database\Seeder;
use App\Wintels;

class WintelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wintels::class, 10)->create();
    }
}
