<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rezerwacje;

class zapisy extends Controller
{
    public function check(Request $data)
    {
        $date=date("Y-m-d", strtotime($data->date));
        $rezerwajce = rezerwacje::where('date', $date)->select('date', 'time')->get();

        foreach($rezerwajce as $key)
        {
            echo $key->date."  ".date('D', strtotime($key->date))."<br/>";
            echo $key->time."<br/><br/>";
        }
        session(['date' => $data->date]);
        session(['time' => $data->time]);
        session(['persons' => $data->persons]);
        return redirect(route('rezerwacja'));
    }
}
