<?php

use Illuminate\Database\Seeder;

class godz_otwarcia_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $day = new \App\godz_otwarcia;
        $day->day = 'Mon';
        $day->start = "12:00:00";
        $day->end = "22:00:00";
        $day->save();

        $day = new \App\godz_otwarcia;
        $day->day = 'Tue';
        $day->start = "12:00:00";
        $day->end = "22:00:00";
        $day->save();

        $day = new \App\godz_otwarcia;
        $day->day = 'Wed';
        $day->start = "12:00:00";
        $day->end = "22:00:00";
        $day->save();

        $day = new \App\godz_otwarcia;
        $day->day = 'Thu';
        $day->start = "12:00:00";
        $day->end = "22:00:00";
        $day->save();

        $day = new \App\godz_otwarcia;
        $day->day = 'Fri';
        $day->start = "12:00:00";
        $day->end = "22:00:00";
        $day->save();

        $day = new \App\godz_otwarcia;
        $day->day = 'Sat';
        $day->start = "12:00:00";
        $day->end = "23:00:00";
        $day->save();

        $day = new \App\godz_otwarcia;
        $day->day = 'Sun';
        $day->start = "12:00:00";
        $day->end = "21:30:00";
        $day->save();
    }
}
