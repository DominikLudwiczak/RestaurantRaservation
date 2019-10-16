<?php

use Illuminate\Database\Seeder;
use App\manu_kat;
use App\menu;

class menu_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kat=manu_kat::findOrFail(1);

        $kat->kat()->save(new menu(['danie'=>'Śledź Matis / Pomidor / Cebula / Oliwa Paprykowa', 'cena'=>32]));
    }
}
