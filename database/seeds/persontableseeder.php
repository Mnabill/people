<?php

use Illuminate\Database\Seeder;
use App\person;

class persontableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(person::class,50 )->create();
    }
}
