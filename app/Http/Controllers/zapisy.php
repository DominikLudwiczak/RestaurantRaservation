<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rezerwacje;
use App\godz_otwarcia;
use App\stoliki;
use DB;
use Auth;

class zapisy extends Controller
{
    public function check(Request $data)
    {
        $date=date("Y-m-d", strtotime($data->date));

        $rezerwacje_db=DB::select("select time, table_id from rezerwacjes WHERE date = ? AND table_id IN (SELECT table_id FROM stolikis WHERE persons >= ? AND persons <= ?) ORDER BY table_id",[$date, $data->persons, $data->persons+2]);

        $stoliki=stoliki::all();

        $p=0;
        foreach($rezerwacje_db as $row)
        {
            $rezerwacja[$p][0]=$row->time;
            $rezerwacja[$p][1]=$row->table_id;
            $p++;
        }

        $godz_otw = godz_otwarcia::where('day', date('D', strtotime($data->date)))->select('start', 'end')->get();
        
        $start=date("H:i", strtotime('-30 minutes', strtotime($data->time)));
        foreach($godz_otw as $otw)
        {
            $end=date("H:i", strtotime("-2 hours", strtotime($otw->end)));
            if($start < $otw->start)
            {
                $start=date("H:i", strtotime('-30 minutes', strtotime($otw->start)));
            }
        }
        $rozp=$start;

        $godziny=array();
        $j=0;
        foreach($stoliki as $wiersz)
        {
            $start=$rozp;
            if($p!=0)
            {
                for($i=0; $i < $p; $i++)
                {
                    if($wiersz->table_id==$rezerwacja[$i][1])
                    {
                        $rez=date("H:i", strtotime("-2 hour", strtotime($rezerwacja[$i][0])));
                        while($start < $rez)
                        {
                            $start=date("H:i", strtotime("+30 minutes", strtotime($start)));
                            $godziny[$j][0]=$start;
                            $godziny[$j][1]=$wiersz->table_id;
                            $j++;
                        }
                        $start=date("H:i", strtotime("+3 hour 30 minutes", strtotime($rez)));
                    }
                }
            }

            while($start < $end)
            {
                $start=date("H:i", strtotime("+30 minutes", strtotime($start)));
                $godziny[$j][0]=$start;
                $godziny[$j][1]=$wiersz->table_id;
                $j++;
            }
        }
        session(['godziny' => $godziny]);
        session(['date' => $data->date]);
        session(['time' => $data->time]);
        session(['persons' => $data->persons]);
        session(['stoliki' => $stoliki]);
        return redirect(route('rezerwacja'));
    }

    public function save(request $data)
    {
        $butt=explode("; ", $data->save);
        if(Auth::guest())
        {
            return redirect('login');
        }
        else
        {
            $date=date("Y-m-d", strtotime($butt[0]));
            $dane=[
                'user_ID' => Auth::user()->id,
                'table_ID' => $butt[2],
                'persons' => $butt[3],
                'date' => $date,
                'time' => $butt[1]
            ];
            $save=rezerwacje::create($dane);
            $dane=null;
            return redirect(route('rezerwacja'))->with('success', 'zarezerwowano stolik!');
        }
    }
}
