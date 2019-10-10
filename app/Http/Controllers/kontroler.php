<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;
use App\manu_kat;
use App\menu;

class kontroler extends Controller
{
    public function faq()
    {
        $result=faq::all();
        return view('faq')->with('result', $result);
    }

    public function menu()
    {
         
    }

    public function rel()
    {
        $kat=manu_kat::findOrFail(1);

        $kat->kat()->save(new menu(['danie'=>'Śledź Matis / Pomidor / Cebula / Oliwa Paprykowa', 'cena'=>32]));
    }
}
