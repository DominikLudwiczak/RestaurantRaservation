<?php

use Illuminate\Database\Seeder;

class menu_kat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manu_kats')->insert([
            'kategoria' => 'Przystawki'
        ]);
    }
}
