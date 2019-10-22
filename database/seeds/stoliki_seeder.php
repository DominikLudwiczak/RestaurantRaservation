<?php

use Illuminate\Database\Seeder;

class stoliki_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stolik = new \App\stoliki();
        $stolik->table_id = 1;
        $stolik->persons = 4;
        $stolik->save();

        $stolik = new \App\stoliki();
        $stolik->table_id = 2;
        $stolik->persons = 6;
        $stolik->save();

        $stolik = new \App\stoliki();
        $stolik->table_id = 3;
        $stolik->persons = 2;
        $stolik->save();

        $stolik = new \App\stoliki();
        $stolik->table_id = 4;
        $stolik->persons = 10;
        $stolik->save();
    }
}
