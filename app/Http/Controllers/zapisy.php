<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rezerwacje;
use App\godz_otwarcia;

class zapisy extends Controller
{
    public function check(Request $data)
    {
        $date=date("Y-m-d", strtotime(session('date')));
        $rezerwacje = rezerwacje::where('date', $date)->select('date', 'time')->get();

        $godz_otw = godz_otwarcia::where('day', date('D', strtotime(session('date'))))->select('start', 'end')->get();
        
        $start=date("H:i", strtotime('-10 minutes', strtotime(session('time'))));
        foreach($godz_otw as $otw)
        {
            $end=date("H:i", strtotime("-2 hours", strtotime($otw->end)));
        }

        $p=0;
        foreach($rezerwacje as $row)
        {
            $rezerwacja[$p] = $row->time;
            $p++;
        }

        if($p!=0)
        {
            for($i=0; $i < count($rezerwacja); $i++)
            {
                $rez=date("H:i", strtotime("-2 hour", strtotime($rezerwacja[$i])));
                while($start < $rez)
                {
                    $start=date("H:i", strtotime("+10 minutes", strtotime($start)));
                    echo $start."<br/>";
                }
                $start=date("H:i", strtotime("+3 hour 50 minutes", strtotime($rez)));
            }
        }
        
        while($start < $end)
        {
            $start=date("H:i", strtotime("+10 minutes", strtotime($start)));
            echo $start."<br/>";
        }
        
        session(['date' => $data->date]);
        session(['time' => $data->time]);
        session(['persons' => $data->persons]);
        //return redirect(route('rezerwacja'));
    }
}
