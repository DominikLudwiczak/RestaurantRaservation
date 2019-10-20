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

    public function menu($kategoria)
    {
        $kat=manu_kat::all();
        $kat_id=manu_kat::where('kategoria', $kategoria)->first();
        $menu=menu::where('menu_kat_id', $kat_id->id)->get();
        return view('menu')->with('kat', $kat)->with('kategoria', $kategoria)->with('menu', $menu);
    }

    public function message(Request $data)
    {

    }
}