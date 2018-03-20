<?php

use Illuminate\Database\Seeder;
use App\Presentacion;

class PresentacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Presentacion::class,3)->create();
    }
}
