<?php

use Illuminate\Database\Seeder;

class rezerwacje_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rezerwacja = new \App\rezerwacje;
        $rezerwacja->user_ID = 1;
        $rezerwacja->table_ID = 2;
        $rezerwacja->persons = 5;
        $rezerwacja->date = "2020-07-20";
        $rezerwacja->time = "16:30:00";
        $rezerwacja->save();

        $rezerwacja = new \App\rezerwacje;
        $rezerwacja->user_ID = 1;
        $rezerwacja->table_ID = 2;
        $rezerwacja->persons = 6;
        $rezerwacja->date = "2020-07-20";
        $rezerwacja->time = "18:30:00";
        $rezerwacja->save();

        $rezerwacja = new \App\rezerwacje;
        $rezerwacja->user_ID = 1;
        $rezerwacja->table_ID = 3;
        $rezerwacja->persons = 2;
        $rezerwacja->date = "2020-07-22";
        $rezerwacja->time = "19:00:00";
        $rezerwacja->save();
    }
}
