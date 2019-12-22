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
    //funkcja zwracająca dostępne godziny
    private function godziny($date, $time, $persons)
    {
        $date=date("Y-m-d", strtotime($date));

        $rezerwacje_db=DB::select("select time, table_id from rezerwacjes WHERE date = ? AND table_id IN (SELECT table_id FROM stolikis WHERE persons >= ? AND persons <= ?) ORDER BY time",[$date, $persons, $persons+2]);

        $stoliki=stoliki::where('persons', '>=', $persons)->where('persons', '<=', $persons+2)->get();

        $p=0;
        foreach($rezerwacje_db as $row)
        {
            $rezerwacja[$p][0]=$row->time;
            $rezerwacja[$p][1]=$row->table_id;
            $p++;
        }

        $godz_otw = godz_otwarcia::where('day', date('D', strtotime($date)))->select('start', 'end')->get();

        $start=null;
        if($time!=null)
        {
            $start=date("H:i", strtotime('-30 minutes', strtotime($time)));
        }
        
        foreach($godz_otw as $otw)
        {
            $end=date("H:i", strtotime("-2 hours", strtotime($otw->end)));
            if($start < $otw->start || $time==null)
            {
                $start=date("H:i", strtotime('-30 minutes', strtotime($otw->start)));
                $time=date("H:i", strtotime($otw->start));
            }
        }
        $rozp=$start;

        $middle=array();
        $godziny=array();
        $tables_rand=array();
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
                            $middle[$j][0]=$start;
                            $middle[$j][1]=$wiersz->table_id;
                            $j++;
                        }
                        $start=date("H:i", strtotime("+3 hour 30 minutes", strtotime($rez)));
                    }
                }
            }

            while($start < $end)
            {
                $start=date("H:i", strtotime("+30 minutes", strtotime($start)));
                $middle[$j][0]=$start;
                $middle[$j][1]=$wiersz->table_id;
                $j++;
            }
        }

        $start=$rozp;
        $p=0;
        $z=0;
        while($start < $end)
        {
            $start=date("H:i", strtotime("+30 minutes", strtotime($start)));
            for($i=0; $i < $j; $i++)
            {
                if($middle[$i][0]==$start)
                {
                    $tables_rand[$z]=$middle[$i][1];
                    $z++;
                }
            }
            if(count($tables_rand) > 0)
            {
                $godziny[$p][0]=$start;
                $rand=array_rand($tables_rand, 1);
                $godziny[$p][1]=$tables_rand[$rand];
                $p++;
            }
            $tables_rand=array();
            $z=0;
        }

        session(['date' => $date]);
        session(['time' => $time]);
        session(['persons' => $persons]);
        return $godziny;
    }

    //funkcja sprawdzająca dostepne godziny
    public function check(Request $data)
    {
        if(strtotime($data->date) < strtotime(date("Y-m-d")))
        { 
            return redirect(route('rezerwacja'))->with('error', 'Możesz zarezerwować stolik tylko w przyszłości');
        }

        if(strtotime($data->date) > strtotime(date("Y-m-d", strtotime('+2 months'))))
        {
            return redirect(route('rezerwacja'))->with('error', 'Możesz zarezerwować stolik maksymalnie 2 miesiące do przodu');
        }
        $round=30*60;
        $time=date("H:i", round(strtotime($data->time)/$round) * $round);
        $godziny=$this->godziny($data->date, $time, $data->persons);

        if($godziny==null)
        {
            $godziny=$this->godziny(date("Y-m-d",strtotime("+1 day", strtotime($data->date))), null, $data->persons);
            $p=count($godziny);
            $godziny[$p][0]='brak';
            $godziny[$p][1]='brak';
        }

        session(['godziny' => $godziny]);
        return redirect(route('rezerwacja'));
    }

    //funkcja przekierowujaca do potwierdzenia
    public function confirm(Request $data)
    {
        if(Auth::guest())
        {
            return redirect('login');
        }
        $butt=explode("; ", $data->save);
        $date=date("Y-m-d", strtotime($butt[0]));
        return view('confirm')->with('butt', $butt)->with('date', $date);
    }

    //funkcja zapisująca rezerwację do bazy
    public function save(request $data)
    {
        if(Auth::guest())
        {
            return redirect('login');
        }
        else
        {
            $butt=explode("; ", $data->save);
            $dane=[
                'user_ID' => Auth::user()->id,
                'table_ID' => $butt[2],
                'persons' => $butt[3],
                'date' => session('date'),
                'time' => $butt[1]
            ];
            $save=rezerwacje::create($dane);
            $dane=null;
            session(['godziny' => ""]);
            session(['date' => ""]);
            session(['time' => ""]);
            session(['persons' => ""]);
            return redirect(route('rezerwacja'))->with('success', 'zarezerwowano stolik!');
        }
    }
}
