<?php

use Illuminate\Database\Seeder;

class manu_kat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kat = new \App\manu_kat();
        $kat->kategoria = 'Przystawki';
        $kat->save();

        $kat = new \App\manu_kat();
        $kat->kategoria = 'Zapy';
        $kat->save();

        $kat = new \App\manu_kat();
        $kat->kategoria = 'Sałaty';
        $kat->save();

        $kat = new \App\manu_kat();
        $kat->kategoria = 'Dania Wegetariańskie';
        $kat->save();

        $kat = new \App\manu_kat();
        $kat->kategoria = 'Dania Główne';
        $kat->save();

        $kat = new \App\manu_kat();
        $kat->kategoria = 'Desery';
        $kat->save();

        $kat = new \App\manu_kat();
        $kat->kategoria = 'Dla Dzieci';
        $kat->save();
    }
}
